<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    //show all lectures
    public function lecture(Request $request){
       
        return view('lecture.lectureIndex',[
            'heading' => 'Latest Lecture',
            'lectures' => Lecture::latest()->filter(request(['tag']))->get()
        ]);
    }

    //show single lectures
    public function video(Lecture $lecture){
        return view ('lecture.lectureShow' , [
            'lecture' => $lecture
        ]);
    }
}