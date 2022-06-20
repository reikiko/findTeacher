<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function create()
    {
        return view('auth.registerteacher', [
            "title" => "Register",
        ]);
    }

    // RegisterTeacher
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email:dns|unique:teachers',
            'name' => 'required|max:255',
            'username' => 'required|min:5|max:20|unique:teachers',
            'password' => 'required|min:5|max:10|',
            'avatar' => 'image|file|max:1024',
            'phone_number' => 'required|max:12'
        ]);
        if ($request->file('avatar')) {
            $validated['avatar'] = $request->file('avatar')->store('subject-images');
        }
        $validated['password'] = Hash::make($validated['password']);
        Teacher::create($validated);

        return redirect('/loginteacher')->with('success', 'Registration Success!');
    }

    public function index(){
        return view('teachers',[
            "title" => "Teacher",
            "teachers" => Teacher::all()
        ]);
    }

    public function dashboardteacher(){
        return view('dashboard.index',[
            "title" => "Dashboard",
            "subjects" => Subject::all(),
            "user" => Student::all(),
        ]);
    }
}
