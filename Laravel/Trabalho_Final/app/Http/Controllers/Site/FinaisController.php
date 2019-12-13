<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Finais;

class FinaisController extends Controller
{
       public function index()
    {
    	$finais = Finais::all();
    	//$slides = Slide::where('publicado','=','sim')->orderBy('ordem')->get();
    	//$direcaoImagem = ['center-align','left-align','right-align'];

    	return view('site.finais',compact('finais'));
    }
}
