<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function create()
    {
        return view('auth.registeradmin', [
            "title" => "Register",
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email:dns|unique:admins',
            'username' => 'required|min:5|max:20|unique:admins',
            'password' => 'required|min:5|max:10|',
        ]);
        $validated['password'] = Hash::make($validated['password']);
        Admin::create($validated);

        return redirect('/loginadmin')->with('success', 'Registration Success!');
    }

    public function index(){
        return view('admin.index',[
            "title" => "Admin Dashboard",
            "user" => Student::all(),
            "teacher" => Teacher::all(),
        ]);
    }
}
