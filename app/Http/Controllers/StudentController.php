<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function create()
    {
        return view('auth.registerstudent', [
            "title" => "Register",
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email:dns|unique:students',
            'name' => 'required|max:255',
            'username' => 'required|min:5|max:20|unique:students',
            'password' => 'required|min:5|max:10|',
            'address' => 'required',
            'phone_number' => 'required|max:12',
            'school' => 'required',
        ]);
        $validated['password'] = Hash::make($validated['password']);
        Student::create($validated);

        return redirect('/loginstudent')->with('success', 'Registration Success!');
    }
}
