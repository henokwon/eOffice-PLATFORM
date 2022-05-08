<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;





// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\User;
use GuzzleHttp\Client;
use Illuminate\Support\Str;
use Mail;
use App\Mail\EmailVerificationMail;
use App\PasswordReset;
use App\Mail\ForgetPasswordMail;
use Carbon\Carbon;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function postLogin(Request $request){

        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6|max:100',
            'grecaptcha'=>'required'
        ]);

        $grecaptcha=$request->grecaptcha;

        $client = new Client();

        $response = $client->post(
            'https://www.google.com/recaptcha/api/siteverify',
            ['form_params'=>
                [
                    'secret'=>env('GOOGLE_CAPTCHA_SECRET'),
                    'response'=>$grecaptcha
                 ]
            ]
        );
      
        $body = json_decode((string)$response->getBody());

        if($body->success==true){

            $user=User::where('email',$request->email)->first();

            if(!$user){
                return redirect()->back()->with('error','Email is not registered');
            }else{

                if(!$user->email_verified_at){
                    return redirect()->back()->with('error','Email is not verified');
                }else{

                    if(!$user->is_active){
                        return redirect()->back()->with('error','User is not active. Contact admin');
                    }else{

                        $remember_me=($request->remember_me)?true:false;
                        if(auth()->attempt($request->only('email','password'),$remember_me)){

                            return redirect()->route('dashboard')->with('success','Login successfull');


                        }else{
                            return redirect()->back()->with('error','Invalid credentials');
                        }

                    }

                }

            }
          
        }else{
            return redirect()->back()->with('error','Invalid recaptcha');
        }


    }

    public function ajaxLogin(Request $request){

        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6|max:100',
            'grecaptcha'=>'required'
        ]);

        $grecaptcha=$request->grecaptcha;

        $client = new Client();

        $response = $client->post(
            'https://www.google.com/recaptcha/api/siteverify',
            ['form_params'=>
                [
                    'secret'=>env('GOOGLE_CAPTCHA_SECRET'),
                    'response'=>$grecaptcha
                 ]
            ]
        );
      
        $body = json_decode((string)$response->getBody());

        if($body->success==true){

            $user=User::where('email',$request->email)->first();

            if(!$user){
                return response()->json([
                    'message'=>'Email is not registered'
                ],400);

            }else{

                if(!$user->email_verified_at){
                        return response()->json([
                            'message'=>'Email is not verified'
                        ],400);
                }else{

                    if(!$user->is_active){
                        return response()->json([
                            'message'=>'User is not active. Contact admin'
                        ],400);
                
                    }else{

                        $remember_me=($request->remember_me)?true:false;
                        if(auth()->attempt($request->only('email','password'),$remember_me)){

                            return response()->json([
                                'message'=>'Login successfull',
                                'redirect_url'=>route('dashboard')
                            ],200);
                            


                        }else{

                            return response()->json([
                                'message'=>'Invalid credentials'
                            ],400);

                            
                        }

                    }

                }

            }
          
        }else{
            return response()->json([
                'message'=>'Invalid recaptcha'
            ],400);
            
        }



    }

}
