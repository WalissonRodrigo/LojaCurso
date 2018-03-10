<?php

namespace LojaCurso\Models;

use Illuminate\Database\Eloquent\Model;
use LojaCurso\Models\Role;
use LojaCurso\Models\User;

class Permission extends Model
{
    protected $table = 'permissions';
    
    protected $fillable = [
        'name', 'label'
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
