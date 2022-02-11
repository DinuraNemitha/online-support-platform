<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\SupportAgentModule\Models\SupportAgent;
use Auth;


class LoginController extends Controller
{

    function index()
    {
     return view('auth.login');
    }

    function login(Request $request)
    {

     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|alphaNum|min:3'
     ]);

      $email  = $request->get('email');
      $password = $request->get('password');


    if (auth()->attempt(array('email' =>$email, 'password' => $password, 'status'=> SupportAgent::STATUS_ACTIVE))){

            return view('dashboard');
     }
     else
     {
      return back()->with('error', 'Wrong Login Details');
     }

    }


    function dashboard()
    {
     return view('dashboard');
    }

    function guestDashboard()
    {
     return view('guest-dashboard');
    }


    function logout(Request $request)
    {

        Auth::logout();
        return redirect('login');

    }

}
