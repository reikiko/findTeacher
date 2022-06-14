<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.teacher.index', [
            "title" => "Dashboard",
            "teachers" => Teacher::all(),
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
    public function edit(Teacher $teacher)
    {
        return view('admin.teacher.edit',[
            'title' => "Edit",
            'teacher' => $teacher,
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
            'email' => 'required|email:dns|unique:teachers',
            'name' => 'required|max:255',
            'password' => 'required|min:5|max:10|',
            'phone_number' => 'required|max:12',
        ];

        
        if($request->username != $teacher->username){
            $rules['username'] = 'required|min:5|max:20|unique:teachers';
        }
        
        $validated = $request->validate($rules);
        Teacher::where('id', $teacher->id)
                ->update($validated);

        return redirect('/admin/teachers')->with('success', 'Category has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        Teacher::destroy($teacher->id);

        return redirect('/admin/teachers')->with('deleted', ' Teacher has been deleted!');
    }
}
