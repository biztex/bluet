<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    
    public function prices()
    {
        return $this->hasMany('App\Models\Price');
    }

    public function activities()
    {
        return $this->hasMany('App\Models\Activity');
    }

    public function genre()
    {
        return $this->belongsTo('App\Models\Genre');
    }

    public function stocks()
    {
        return $this->hasMany('App\Models\Stock');
    }

    public function reservation()
    {
        return $this->hasOne('App\Models\Reservation');
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
}
