<?php
namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\FormInput;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

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

        $form->forms()->save($inputs);
        return 'form input submited to database';
    }
    public function getInputsByForm($id){
        // here the 'forms' is the method in Form class
        try{
            $inputs=Form::find($id)->forms;
           
        }
        catch(ModelNotFoundException $exception){

            return back()->withError($exception->getMessage())->withInput();
        }
        return $inputs;

       
    }
   public function addFormm( Request $request){
    error_log(print_r($_REQUEST, true));
    // dd($request[0]);
    // error_log($request[0]);
// foreach($request as $input){
   
//     error_log($$input);

// }

// [{"type":"","inputType":"text","label":"No name","edit":false},{"type":"","inputType":"text","label":"No name","edit":false}]





    $forms = new Form();
    $forms->title = 'fill form';
    $forms->description = 'Fill the contact form';
    $forms->save();
    // return 'Nothhing';

 

    $inputs = new FormInput();
    $inputs->label = 'last Name';
    $inputs->type = 'text';
    $inputs->required = true;
    $forms->forms()->save($inputs);
   
    // error_log(print_r($_REQUEST, true));
    // error_log($request);
    
    
     return $request;
   }
}
