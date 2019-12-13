<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Finais_Felizes;

class FinaisController extends Controller
{
        public function index($id)
    {
    	  	$finais = Finais_Felizes::find($id);

    	$seo = [
    		'nome'=>$finais->nome,
			'descricao'=>$finais->descricao,
			'imagem'=>asset($finais->imagem),
    	];


    	return view('finaisfelizes',compact('finais','seo'));
    }
}
