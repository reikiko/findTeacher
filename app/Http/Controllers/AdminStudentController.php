<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.student.index', [
            "title" => "Dashboard",
            "students" => Student::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cate $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('admin.student.edit',[
            'title' => "Edit",
            'student' => $student,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'email' => 'required|email:dns|unique:students',
            'name' => 'required|max:255',
            'password' => 'required|min:5|max:10|',
            'address' => 'required',
            'phone_number' => 'required|max:12',
            'school' => 'required',
        ];

        
        if($request->username != $student->username){
            $rules['username'] = 'required|min:5|max:20|unique:students';
        }
        
        $validated = $request->validate($rules);
        Student::where('id', $students->id)
                ->update($validated);

        return redirect('/admin/students')->with('success', 'Category has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);

        return redirect('/admin/students')->with('deleted', ' Student has been deleted!');
    }
}
