<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use LojaCurso\Models\Permission;
use LojaCurso\Models\Role;

class PermissionsToRoles extends Seeder
{
    public function run()
    {
        $adicionar = Permission::where('name','=', 'Cadastrar')->value('id');
        $editar = Permission::where('name','=', 'Editar')->value('id');
        $visualizar = Permission::where('name','=', 'Visualizar')->value('id');
        $deletar = Permission::where('name','=', 'Apagar')->value('id');
        
        $admin = Role::where('name','=', 'Administrador')->first();
        $moderador = Role::where('name','=', 'Moderador')->first();
        $usuario = Role::where('name','=', 'Usuario')->first();

        $admin->permissions()->sync([$adicionar, $editar, $visualizar, $deletar]);
        $moderador->permissions()->sync([$adicionar, $editar, $visualizar, $deletar]);
        $usuario->permissions()->sync([$adicionar, $editar, $visualizar]);
    }
}
