<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use LojaCurso\Models\User;
use LojaCurso\Models\Role;

class RolesToUsers extends Seeder
{
    public function run()
    {
        $admin = Role::where('name','=', 'Administrador')->first();
        $funcionario = Role::where('name','=', 'Funcionario')->first();
        $moderador = Role::where('name','=', 'Moderador')->first();
        $usuario = Role::where('name','=', 'Usuario')->first();
        
        $userAdmin = User::where('email','=', 'walissonrodrigo@outlook.com')->first();
        $userFuncionario = User::where('email','=', 'funcionario@laravel.com')->first();
        
        $userAdmin->roles()->sync($admin);
        $userFuncionario->roles()->sync($funcionario);

    }
}
