<?php

namespace LojaCurso\Models;

use Illuminate\Database\Eloquent\Model;
use LojaCurso\Models\Permission;
use LojaCurso\Models\User;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'name', 'label'
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
