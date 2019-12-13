<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Animal;

class AnimalController extends Controller
{
   public function index($id)
    {
    	$animal = Animal::find($id);

    	$seo = [
    		'nome'=>$animal->nome,
			'descricao'=>$animal->descricao,
			'imagem'=>asset($animal->imagem),
			'url'=> route('site.animal',[$animal->id,str_slug($animal->nome,'_')])
    	];


    	return view('site.animal',compact('animal','seo'));
    }
}
