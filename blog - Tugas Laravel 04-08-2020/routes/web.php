<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/master', function () {
//     return view('master');
// });


//Tugas Blog
Route::get('/', 'HomeController@Home' );
Route::get('/register' , 'AuthController@Register');
Route::post('/greeting' , 'AuthController@Greeting');   


//Tugas Template Blade
Route::get('/' , function(){
	return view('content');
});

Route::get('/data-table' , function(){
	return view('table');
});