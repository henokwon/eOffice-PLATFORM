<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourForm extends Model
{
    use HasFactory;
    protected $fillable=[];
    protected $travel_needed=[
        'travel_needed' => 'array'

    ];
}
