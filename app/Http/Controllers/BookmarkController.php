<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function index()
    {
        return view('bookmark', [
            "title" => "Bookmark",
            "bookmarks" => Bookmark::where('student_id', auth()->user()->id)->get(),
            "subject" => Subject::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validationData = $request->validate([
            'subject_id' => 'required',
        ]);
        $validationData['student_id'] = auth()->user()->id;

        Bookmark::create($validationData);
        return redirect('/bookmark')->with('success', 'New bookmark has been added!');
    }
}
