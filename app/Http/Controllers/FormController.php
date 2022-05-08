<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\FormInput;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class FormController extends Controller
{
    //
    public function view()
    {
        $data = Form::find(1);
        return view('form.view', compact('data'));


        //view.blade.php
        // <h1>(hasOne) relationship</h1>
        // <div class="container">
        //   <h3>title: {{$data->title}}</h3>
        // <h3>title:description {{$data->description}}</h3>
        //   <h4>input: {{ $data->forms->type }}</h4>
        //   <h4>input: {{ $data->forms->required }}</h4>
        // </div>
    }
  
    public function addForms(Request $request)
    {
        $forms = new Form();
        // $inputs->label = $request->label;
        // $inputs->type = $request->type;
        // $inputs->required = $request->required;
        $forms->title = 'Contact form';
        $forms->description = 'Fill the contact form';
        $forms->save();
        return 'Form title and description successfully saved';
    }
    public function addInputs($id)
    {
        $form=Form::find($id);
        $inputs = new FormInput();
        // $inputs->label = $request->label;
        // $inputs->type = $request->type;
        // $inputs->required = $request->required;
        $inputs->label = 'First Name';
        $inputs->type = 'text';
        $inputs->required = true;
        // $inputs->save();
        $form->forms()->save($inputs);
        return 'form input submited to database';
    }
    public function getInputsByForm($id){
        // here the 'forms' is the method in Form class
        try{
            $inputs=Form::find($id)->forms;
            // return $inputs;
        }
        catch(ModelNotFoundException $exception){
            // return 'No form';
            return back()->withError($exception->getMessage())->withInput();
        }
        return $inputs;

       
    }
}
