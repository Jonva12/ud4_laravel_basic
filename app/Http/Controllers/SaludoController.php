<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\dni;

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

    public function form(Request $request){
    	$nombre = $request->input('nombre');
    	$apellido = $request->input('apellido');
    	return view('pages/saludoForm', array('nombre'=>$nombre), array('apellido'=>$apellido));
    }

    public function form2(Request $request){
    	$data = file_get_contents("data/saludos.json");
    	$saludos = json_decode($data, true);
    	$nombre = $request->input('nombre');
    	$apellido = $request->input('apellido');
    	return view('pages/formJSON', ['nombre'=>$nombre, 'apellido'=>$apellido, 'saludos'=>$saludos]);
    }

    public function form3(Request $request){

    	$validatedData = $request->validate([
	        'nombre' => 'required|string|min:2|max:15',
	        'apellido' => 'required|string|min:2|max:20',
	        'email' => 'required|email',
	        'tlf' => ['nullable','regex:/^[9|6|7][0-9]{8}$/'],
	        'dni' => ['required', new dni]
    	]);

    	$nombre = $request->input('nombre');
    	$apellido = $request->input('apellido');
    	$email = $request->input('email');
    	$tlf = $request->input('tlf');
    	$dni = $request->input('dni');
    	return view('pages/saludoForm3', ['nombre'=>$nombre, 'apellido'=>$apellido, 'email'=>$email, 'tlf'=>$tlf, 'dni'=>$dni]);
    }
    
}
