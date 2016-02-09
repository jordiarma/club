<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Jugador extends Controller
{
    public function nombre($id)
	{
    	return "Esto muestra un jugador. Recibiendo $id";
	}

	public function mostrarUriUrl(Request $request){
    	echo $request->path();
    	echo "<br>";
    	echo $request->url();
	}

	public function editar(Request $request, $id){
		echo "Recibo $id como parámetro de la ruta.";
		echo "Además recibimos estos datos por formulario: " . implode(', ', $request->all());
	}
}
