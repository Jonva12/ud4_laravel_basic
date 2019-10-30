<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
	public function saludo(){
    	$kaixo = 'Kaixo';
    	return view('pages/saludo2', array('kaixo' => $kaixo));
    }

    public function index($nombre){
    	return view('pages/saludo', array('nombre'=>$nombre));
    }

    public function color($nombre, $color = 'anonimo'){
    	return view('pages/saludoColor', array('nombre'=>$nombre), array('color'=>$color));
    }
    
}
