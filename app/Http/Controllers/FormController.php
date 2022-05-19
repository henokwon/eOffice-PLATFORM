<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\FormInput;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

class FormController extends Controller
{

// Form poster
    public function postFormTitle(Request $request)
    {
        $forms = new Form();
        $forms->title = $request->form_title;
        $forms->description = $request->form_description;
        $forms->save();
    }

    public function addFormElement(Request $request)
    {
        error_log(print_r($_REQUEST, true));
        $last = DB::table('forms')->orderBy('id', 'desc')->first();
        $forms = Form::find($last->id);
        $inputs = new FormInput();
        $inputs->label = $request->label;
        $inputs->type =  $request->inputType;
        $inputs->required = true;
        $forms->forms()->save($inputs);
    }

    // Form getter
    public function getFormTitle(Request $request)
    {
        $data = Form::all();
        return $data;
    }

    public function getFormElement($id)
    {
        $elements = Form::find($id)->forms;
        return $elements;
    }



    public function view()
    {
        $data = Form::all();
        return $data;
    }

    public function addInputs($id)
    {
        $form = Form::find($id);
        $inputs = new FormInput();
        // $inputs->label = $request->label;
        // $inputs->type = $request->type;
        // $inputs->required = $request->required;
        $inputs->required = true;

        $form->forms()->save($inputs);
        return 'form input submited to database';
    }
    public function getInputsByForm($id)
    {
        $inputs = Form::find($id)->forms;
        return $inputs;
        // try{
        //     $inputs=Form::find($id)->forms;

        // }
        // catch(ModelNotFoundException $exception){

        //     return back()->withError($exception->getMessage())->withInput();
        // }
        // return $inputs; 
    }
}
