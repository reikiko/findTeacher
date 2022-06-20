<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('dashboard.subject.index', [
            "title" => "Dashboard",
            "subjects" => Subject::where('teacher_id', auth('teach')->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Subject $subject)
    {
        return view('dashboard.subject.create', [
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
    //Add Subject
    public function store(Request $request)
    {
        $validationData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:subjects',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'desc' => 'required',
        ]);

        if ($request->file('image')) {
            $validationData['image'] = $request->file('image')->store('subject-images');
        }
        $validationData['teacher_id'] = auth('teach')->user()->id;
        $validationData['excerpt'] = Str::limit(strip_tags($request->desc), 200);

        $checkSave = Subject::create($validationData);
        return redirect('/dashboard/subjects')->with('success', 'New subject has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        return view('dashboard.subject.show', [
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
        return view('dashboard.subject.edit',[
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

        return redirect('/dashboard/subjects')->with('success', 'Subject has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        if($subject->image){
            Storage::delete($subject->image);
        }
        
        Subject::destroy($subject->id);

        return redirect('/dashboard/subjects')->with('deleted', ' Subject has been deleted!');
    }
}
