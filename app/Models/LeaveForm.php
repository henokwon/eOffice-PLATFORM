<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveForm extends Model
{
    use HasFactory;
    protected $fillables=['id','first_name','last_name','phone','emp_id', 'reason','start_date','end_date'];
}
