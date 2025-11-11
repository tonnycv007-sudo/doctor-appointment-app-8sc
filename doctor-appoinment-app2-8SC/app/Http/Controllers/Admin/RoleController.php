<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.roles.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validar que se cree bien
        $request->validate(['name' => 'required|unique:roles,name']);

        //si pasa crear el rol
        Role::create(['name' => $request->name]);

        // variable
        session()->flash('swal',
        [
            'icon' => 'success',
            'title' => 'Rol Creado correctamente',
            'text' => 'El rol ha sido creado exitosamente'
        ]);


        //redireccionar
        return redirect()->route('admin.roles.index')->with('succes','Role created succesfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('Admin.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        
        if ($role->id <=4){

         session()->flash('swal',
        [
            'icon' => 'error',
            'title' => 'Error',
            'text' => 'No puedes editar este rol'
        ]);

        return redirect()->route('admin.roles.index');
        
        }
        return view('Admin.roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //validar que se inserte bien
        $request->validate(['name' => 'required|unique:roles,name,' . $role->id]);

        //si el campo no cambia no actualices
        if($role->name === $request->name){
            session()->flash('swal',
        [
            'icon' => 'info',
            'title' => 'Sin cambios',
            'text' => 'No se detectaron Modificaciones'
        ]);

        return redirect()->route('admin.roles.edit', $role);
        }

        //si pasa editar el rol
        $role->update(['name'=> $request->name]);

        // variable
        session()->flash('swal',
        [
            'icon' => 'success',
            'title' => 'Rol Actializado correctamente',
            'text' => 'El rol ha sido actualizado exitosamente'
        ]);


        //redireccionar
        return redirect()->route('admin.roles.index' , $role);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        if ($role->id <=4){

         session()->flash('swal',
        [
            'icon' => 'error',
            'title' => 'Error',
            'text' => 'No puedes eliminar este rol'
        ]);

        return redirect()->route('admin.roles.index');

        }


        $role->delete();

         session()->flash('swal',
        [
            'icon' => 'success',
            'title' => 'Rol eliminado',
            'text' => 'El rol ha sido eliminado exitosamente'
        ]);

        return redirect()->route('admin.roles.index');

    }
}
