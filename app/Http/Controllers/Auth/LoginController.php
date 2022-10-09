<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    
    /**
     * Handle the authentication attempt.
     */
    public function authenticate(Request $request){

        // Check if already authenticated


        // Get the credentials from the request
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt to authenticate
        if(Auth::attempt($credentials)){
            // When success
            // Create a session
            $request->session()->regenerate();

            // Redirect user
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function showLoginForm(){
        return view('authentication.login');
    }


    /**
     *  Log the user out of the application.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {

        Log::debug("Attempting to get the authenticated user.");
        $user = Auth::user();
        Log::debug($user->name);

        Log::debug("Attempting to log out");
        Auth::logout();
        //Auth::guard('web')->logout();
        Log::debug("Attempt to log out success!!");

        Log::debug("Attempting to invalidate session");
        $request->session()->invalidate();
        Log::debug("Attempting to invalidate session success");

        Log::debug("Attempting to re-generate session");
        $request->session()->regenerateToken();
        Log::debug("Attempting to re-generate session success!");

        Log::debug("Redirecting user back.");
        return redirect('/login');

   
    }
}
