<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'cafe_id',
        'customer_name',
        'data_time',
        'party_size'
    ];

    public function cafes()
    {
        return $this->belongsTo(Cafe::class);
    }
}
