<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'cafe_id',
        'rating',
        'comment'
    ];

    public function cafes()
    {
        return $this->belongsTo(Cafe::class);
    }
}
