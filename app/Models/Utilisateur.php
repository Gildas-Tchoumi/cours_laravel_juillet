<?php

namespace App\Models;

use App\Models\Roles;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Utilisateur extends Authenticatable
{
    //
    protected $fillable = [
        'firstname',
        'sexe',
        'email',
        'password',
    ];

     public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Roles::class, 'rolesutilisateurs', 'utilisateur_id', 'role_id');
    }
}
