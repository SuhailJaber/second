<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});



    Route::get('above', function () {
        $name = "Ahmed";
       // return view('above', ['name' => 'Ahmed']);
       // return view('above')->with(['name', $name]);
        return view('above',compact('name'));
    });
    
    Route::post('above', function () {
        $name = 'Ahmed';
        if(isset($_POST['name']))
            $name = $_POST['name'];
        return view('above',compact('name'));
    });
    
    
    Route::get('tasks', function () {
        $tasks = ['Task #1', 'Task #2', 'Task #3'];
        return view('tasks', compact('tasks'));
    
});
