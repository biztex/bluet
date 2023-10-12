<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCancel extends Model
{
    use HasFactory;

    public function reservation()
    {
        return $this->belongsTo('App\Models\Reservation', 'reservation_id');
    }
}