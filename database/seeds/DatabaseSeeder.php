<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Users::class);
        $this->call(Permissions::class);        
        $this->call(Roles::class);
        $this->call(RolesToUsers::class);        
        $this->call(PermissionsToRoles::class);
    }
}
