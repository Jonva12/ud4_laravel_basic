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

Route::get('contacto', function(){
  return view('pages/contacto');
});

Route::get('blog/{idProducto}',function($idProducto){
  return view('pages/blog', array('idProducto'=>$idProducto));
})->name('blog');

Route::get('blog/{idProducto}/{nombre}',function($idProducto, $nombre){
  return view('pages/blog', ['idProducto'=>$idProducto, 'nombre'=>$nombre]);
})->where(['idProducto' => '[0-9]+', 'nombre' => '[A-Za-z]+'])->name('blog.nombreId');