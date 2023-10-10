<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    public function plan()
    {
        return $this->belongsTo('App\Models\Plan');
    }

    public function price_types()
    {
        return $this->hasOne('App\Models\PriceType', 'number', 'type');
    }
}
