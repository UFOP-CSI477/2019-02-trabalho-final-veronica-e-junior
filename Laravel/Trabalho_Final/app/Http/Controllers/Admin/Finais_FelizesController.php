<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\Finais_Felizes;

class Finais_FelizesController extends Controller
{
    public function index()
    {
    	  	$finais = Finais_Felizes::find($id);

    	$seo = [
    		'nome'=>$finais->nome,
			'descricao'=>$finais->descricao,
			'imagem'=>asset($finais->imagem),
    	];


    	return view('finais.felizes',compact('finais','seo'));
    }
}
    