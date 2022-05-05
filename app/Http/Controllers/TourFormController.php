<?php

namespace App\Http\Controllers;

use App\Models\TourForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Encryption\Encrypter;


class TourFormController extends Controller
{
    // $table->json('column')->nullable();
    //
    public function sent(Request $request){
        $data=new TourForm();

        $data->first_name=$request->firstName;
        $data->last_name=$request->lastName;
        $data->phone=$request->phone;
        // $data->email=$request->email;
        $data->email=Auth::user()->email;
        $data->emp_id=$request-> employeeID;
        $data->department=$request->department;
        $data->depature_date=$request->depaturDate;
        $data->return_date=$request->returnDate;
        $data->depature_city=$request->depatureCity;
        $data->arival_city=$request-> arivalCity;

        $data->reason=($request-> reasonForTravel);
        //$data->travel_needed=$request->travelNeeded;

        // $data->reason=json_encod($request-> reasonForTravel);
        $data->travel_needed=$request->travelNeeded;



        $data->save();
    }
    public function renderForm()
    {
        $data=tourform::all();
        // dd($data);
        // dd($data->email);
            return view('eService.tourForm', compact('data'));
    }
}
