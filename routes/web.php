<?php

use App\Models\Lecture;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LectureController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Common Resource Route/naming 

//index - show all data => Lecture Route::get(); = lecture
//show - show a single data -> Lecture Route::get(); = video 
//create - show form to a create new -> Listing Route::post();
//store - store data -> new listing
//edit/update -show form to edit data -> Lecture Route::put(); Route::patch();
//destroy - delete a data -> Lecture Route::

Route::get('/', function () {
    return view('index'
        // [
        // 'heading' => 'Latest Lecture',
        // 'lectures' => Lecture::all() ]
    );
});
// this is for student landing page 
Route::get('/lectures', [LectureController::class,'lecture'] );

// route to create lecture 
Route::get('/admin/create' , [LectureController::class,'create']);

Route::get('/lectures/{lecture}',[LectureController::class , 'video']);

//Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Login User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);