<?php

namespace App\Models;

use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Roles extends Model
{
    // les champs qui peuvent être remplis en masse
    protected $fillable = [
        'name',
        'description',
    ];
    public function utilisateurs(): BelongsToMany
    {
        return $this->belongsToMany(Utilisateur::class, 'rolesutilisateurs', 'role_id', 'utilisateur_id');
    }
}
