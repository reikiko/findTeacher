<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.subject.index', [
            "title" => "Dashboard",
            "subjects" => Subject::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Subject $subject)
    {
        return view('admin.subject.create', [
            "title" => "Dashboard",
            'subject' => $subject,
            "categories" => Category::all(),
        ]);
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
    public function show(Subject $subject)
    {
        return view('admin.subject.show', [
            'title' => "Subject",
            'subject' => $subject
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        return view('admin.subject.edit',[
            'title' => "Edit",
            'subject' => $subject,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Update Subject
    public function update(Request $request, Subject $subject)
    {
        $rules = [
            'name' => 'required',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'desc' => 'required'
        ];

        
        if($request->slug != $subject->slug){
            $rules['slug'] = 'required|unique:subjects';
        }
        
        $validated = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('subject-img');
        }
        $validated['excerpt'] = Str::limit(strip_tags($request->desc), 50);

        Subject::where('id', $subject->id)
                ->update($validated);

        return redirect('/admin/subjects')->with('success', 'Subject has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Delete Subject
    public function destroy(Subject $subject)
    {
        if($subject->image){
            Storage::delete($subject->image);
        }
        
        Subject::destroy($subject->id);

        return redirect('/admin/subjects')->with('deleted', ' Subject has been deleted!');
    }
}
