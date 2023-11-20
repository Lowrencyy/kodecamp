<?php

use Illuminate\Support\Facades\Route;
use App\Models\Lecture;
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

Route::get('/', function () {
    return view('lectures',[
        'heading' => 'Latest Lecture',
        'lectures' => Lecture::all()
    ]);
});

Route::get('/lectures/{id}',function($id){
    return view('lecture' ,[
        'lecture' => Lecture::find($id)
    ]);
});
