<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Definir los roles
        $roles = [
            'Admin',
            'Doctor',
            'Recepcionista',
            'Administrativo',
        ];
        //Crear los roles
        foreach ($roles as $role) {
            Role::create([
                'name' => $role,
            ]);
    }
}
}