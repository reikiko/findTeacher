<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Category;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    //View Subjects
    public function index()
    {
        $subjects = Subject::with(['category']);
        if(request('search')){
            $subjects->where('name','like', '%' . request('search') . '%');
        }

        return  view('subjects', [
            "title" => "Subject",
            "subjects" => Subject::latest()
                ->filter(request(['search',]))
                ->paginate(5),
            "teachers" => Teacher::all(),
            "categories" => Category::all(),
        ]);
    }

    public function show(Subject $subject)
    {
        return view('subject', [
            "title" => "Subject",
            "subject" => $subject,
        ]);
    }
}
