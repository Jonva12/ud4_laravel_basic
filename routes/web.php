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


Route::get('form', function () {
    return view('pages/form');
});

Route::get('form2', function () {
    return view('pages/formJSON');
});

Route::get('form3', function () {
    return view('pages/formValidate');
});

Route::get('contacto', function(){
  return view('pages/contacto');
});

Route::get('blog/{idProducto}',function($idProducto){
  return view('pages/blog', array('idProducto'=>$idProducto));
})->name('blog');

Route::get('blog/{idProducto}/{nombre}',function($idProducto, $nombre){
  return view('pages/blog', ['idProducto'=>$idProducto, 'nombre'=>$nombre]);
})->where(['idProducto' => '[0-9]+', 'nombre' => '[A-Za-z]+'])->name('blog.nombreId');

Route::get('/saludo/{nombre}', 'SaludoController@index')->name('saludo');
Route::get('/saludoForm', 'SaludoController@form')->name('saludo.form');
Route::post('/saludoForm2', 'SaludoController@form2')->name('saludo.form2');
Route::post('/saludoForm3', 'SaludoController@form3')->name('saludo.form3');
Route::get('/saludo', 'SaludoController@saludo')->name('saludo.simple');
Route::get('/saludo/{nombre}/{color?}', 'SaludoController@color')->name('saludo.color');