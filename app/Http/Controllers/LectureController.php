<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LectureController extends Controller
{
    //show all lectures
    public function lecture(Request $request){
       
        return view('lecture.lectureIndex',[
            'heading' => 'Latest Lecture',
            'lectures' => Lecture::latest()->filter(request(['tag' , 'search']))->get()
        ]);
    }

    //show single lectures
    public function video(Lecture $lecture){
        return view ('lecture.lectureShow' , [
            'lecture' => $lecture
        ]);
    }

    // Show Create Form 

    public function create() {
        return view ('lecture.create');
    }

    //store lecture data    
    public function store(Request $request) {
        // dd($request->all());
        $formFields = $request->validate([
            'lectureName' => ['required',Rule::unique('lectures')],
            'tags' => 'required',
            'image' => 'required',
            'video' => 'required',
            'description' => 'required',
            'github' => 'required',

        ]);
        return redirect('/lectures');
    }
}