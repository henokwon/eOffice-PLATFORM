<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;



class CustomLoginController extends Controller
{
   
    public function customerStore(LoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();
        return redirect()->intended(RouteServiceProvider::CUSTOMERFORM);
    }
}
