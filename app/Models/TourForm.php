<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourForm extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'phone', 'email', 'emp_id', 'department', 'depature_date', 'return_date', 'depature_city', 'arival_city', 'reason', 'travel_needed'];
    protected $cast = [
        'travel_needed' => 'array'

    ];

}
