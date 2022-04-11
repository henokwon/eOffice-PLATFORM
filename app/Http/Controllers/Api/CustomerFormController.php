<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerFormRequest;
use App\Http\Resources\CustomerFormResource;
use App\Models\CustomerForm;
use Illuminate\Http\Request;

class CustomerFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CustomerFormResource::collection(CustomerForm::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerFormRequest $request)
    {
        //
     $customerForm=CustomerForm::create($request->validated());
     return new CustomerFormResource($customerForm);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerForm  $customerForm
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerForm $customerForm)
    {
        //
        return new CustomerFormResource($customerForm);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomerForm  $customerForm
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerFormRequest $request, CustomerForm $customerForm)
    {
        //
        $customerForm->update($request->validated());
        return new CustomerFormResource($customerForm);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerForm  $customerForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerForm $customerForm)
    {
        //
        $customerForm->delete();
        return response()->noContent();
    }
}
