<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LeaveFormRequest;
use App\Http\Resources\LeaveFormResource;
use App\Models\LeaveForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaveFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // dd(LeaveFormResource::collection(LeaveForm::all()));
      return  LeaveFormResource::collection(LeaveForm::all());
    }
    public function data(){
      // $userID = 1;
      // $user = User::find($userID);
      return LeaveForm::find(1);
    }
    public function sendData(Request $request){  
      // dd(Auth::user()->email)  ;
      $data=new LeaveForm();
      $data->first_name=$request->firstName;
      $data->last_name=$request->lastName;
      $data->phone=$request->phone;
      //  $data->email=Auth::user()->email;
      $data->email="N@gmail.com";
      $data->department=$request->department;
      $data->start_date=$request->startDate;
      $data->end_date=$request->endDate;
      $data->reason=$request-> reasonForLeave;
      $data->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LeaveFormRequest $request)
    {
        $leaveForm=LeaveForm::create($request->validated());
        return new LeaveFormResource($leaveForm);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LeaveForm  $leaveForm
     * @return \Illuminate\Http\Response
     */
    public function show(LeaveForm $leaveForm)
    {
        return new LeaveFormResource($leaveForm);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LeaveForm  $leaveForm
     * @return \Illuminate\Http\Response
     */
    public function update(LeaveFormRequest $request, LeaveForm $leaveForm)
    {
      $leaveForm->update($request->validated());
      return new LeaveFormResource($leaveForm);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LeaveForm  $leaveForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(LeaveForm $leaveForm)
    {
        $leaveForm->delete();
    }
}
