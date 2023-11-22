<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show Register/create form
    public function create(){
        return view('lecture.studentlist');
    }

    public function store(Request $request) {
        $formFields=$request->validate([
            'firstName' =>'required',
            'lastName' => 'required',
            'permission' => 'required',
            'email' => ['required', 'email', Rule::unique('users' , 'email')],
            'password' => 'required',
            
        ]);

        $formFields['password']=bcrypt($formFields['password']);

        //create user 

        $user = User::create($formFields);

        return redirect('/admin/studentlist')->with('message' , 'New User Created Successfully!!');
        
    }
}
