<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // les champs qui peuvent être remplis en masse
    protected $fillable = [
        'name',
        'description',
    ];



}
