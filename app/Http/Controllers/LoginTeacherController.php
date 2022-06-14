<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginTeacherController extends Controller
{
    public function index()
    {
        return view('auth.loginteacher', [
            "title" => "Login",
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::guard('teach')->attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended('/dashboardteacher');
        }

        return back()->with('loginError', 'Login Failed!');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
}
