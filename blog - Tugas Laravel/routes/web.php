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

Route::get('/', function () {
    return view('welcome');
});


// //Tugas Blog
// Route::get('/', 'HomeController@Home' );
// Route::get('/register' , 'AuthController@Register');
// Route::post('/greeting' , 'AuthController@Greeting');   


// //Tugas Template Blade
// Route::get('/' , function(){
// 	return view('content');
// });

// Route::get('/data-table' , function(){
// 	return view('table');
// });

// // Tugas CRUD Laravel
Route::get('/pertanyaan','PertanyaanController@index')->middleware('auth');
Route::get('/pertanyaan/create','PertanyaanController@create');
Route::post('/pertanyaan','PertanyaanController@store');
Route::get('/{id}' , 'PertanyaanController@show')->name("Show pertanyaan sesuai id");
Route::get('/{id}/edit' , 'PertanyaanController@edit')->name("Edit pertanyaan sesuai id");
Route::put('/{id}' , 'PertanyaanController@update')->name("Update pertanyaan sesuai id");
Route::delete('{id}' ,'PertanyaanController@destroy')->name("Hapus pertanyaan");

// Route::resource('pertanyaan' , 'PertanyaanController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/tesdom_pdf' , function (){
//     $pdf = App::make('dompdf.wrapper');
//     $pdf->loadHTML('<h1>Test</h1>');
//     return $pdf->stream();
// });
Route::get('/pdf' , 'PDFController@pdf');
