<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // Relasi 1 user punya 1 profile
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}
