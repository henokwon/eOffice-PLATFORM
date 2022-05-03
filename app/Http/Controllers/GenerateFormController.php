<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateFormController extends Controller
{
    //
    public function index(){
        return view('form.generate');
    }
}
