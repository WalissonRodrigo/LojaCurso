<?php

namespace LojaCurso\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use LojaCurso\Moldels\Permission;
use LojaCurso\Models\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasPermission(Permission $permission)
    {
        return $this->hasAnyRoles($permission->roles);
    }
    
    public function hasAnyRoles($roles)
    {
        if(is_array($roles) || is_object($roles))
        {
            return !! $roles->intersect($this->roles)->count();
            //return !!$this->roles->intersect($permission->roles)->count();
        }
        return $this->roles->contains('name', $roles);
    }

    public function hasRole($permission)
    {
        if (self::hasAnyRoles($permission))
            return true;
        else
            return false;
    }

    public function isAdministrador()
    {
        if (self::hasAnyRoles('Administrador'))
            return true;
    }

    public function isFuncionario()
    {
        if (self::hasAnyRoles('Funcionario'))
            return true;
    }

    public function isModerador()
    {
        if (self::hasAnyRoles('Moderador'))
            return true;
    }

    public function isUsuario()
    {
        if (self::hasAnyRoles('Usuario'))
            return true;
    }
}
