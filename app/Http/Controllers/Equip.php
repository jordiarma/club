<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Equip extends Controller
{
    public function ver($categoria, $nom)
    {
        if (view()->exists('equip')) 
        {
        	\App\Equip::all();
			return view('equip', [
    			'categoria' => $categoria,
    			'nom' => $nom
    		]);
    	}


		return "Viendo categoría $categoria y página $nom";
    }

    public function mostrarUriUrl(Request $request){
    	echo $request->path();
    	echo "<br>";
    	echo $request->url();
	}

	public function recibirPost(Request $request){
    	dd($request->all());
	}

	public function editar(Request $request, $id){
		echo "Recibo $id como parámetro de la ruta.";
		echo "Además recibimos estos datos por formulario: " . implode(', ', $request->all());
	}
}
