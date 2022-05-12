<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormInput extends Model
{
    protected $table='form_inputs';
    public function forminputs()
    {
        return $this->belongsTo(Form::class);
    }
}
