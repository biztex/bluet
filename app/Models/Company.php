<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function clients()
    {
        return $this->hasMany('App\Models\Client');
    }

    public function plans()
    {
        return $this->hasMany('App\Models\Plan');
    }
}
