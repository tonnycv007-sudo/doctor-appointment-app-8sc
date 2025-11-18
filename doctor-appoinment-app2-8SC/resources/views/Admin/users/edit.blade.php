<x-admin-layout 
    title="Editar Usuario | Healthify" 
    :breadcrumbs="[
        ['name' => 'Dashboard', 'href' => route('admin.dashboard')],
        ['name' => 'Users', 'href' => route('admin.users.index')],
        ['name' => 'Editar'],
    ]">
    <x-wire-card>
        <form action="{{ route('admin.roles.update', $user) }}" method="POST">
            
            @csrf

            @method('PUT')

            <x-wire-input 
                label="Nombre" 
                name="name" 
                placeholder="Nombre" 
                value="{{ old('name', $user->name) }}"
            />

            <div class="flex justify-end mt-4">
                <x-wire-button type="submit" blue>Actualizar</x-wire-button>
            </div>
        </form>
    </x-wire-card>


</x-admin-layout>
