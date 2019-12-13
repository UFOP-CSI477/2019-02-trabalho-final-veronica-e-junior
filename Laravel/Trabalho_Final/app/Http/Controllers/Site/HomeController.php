<?php



namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Animal;

class HomeController extends Controller
{


	public function index()
    {
    	$animais = Animal::all();
    	//$slides = Slide::where('publicado','=','sim')->orderBy('ordem')->get();
    	//$direcaoImagem = ['center-align','left-align','right-align'];

    	return view('site.home',compact('animais'));
    }

    public function busca(Request $request)
    {
    	$busca = $request->all();
    	

    	if($busca['especie'] == 'todos'){
    		$testeespecie = [
    			['especie','<>',null]
    		];
    	}else{
    		$testeespecie = [
    			['especie','=',$busca['especie']]
    		];
    	}
    	if($busca['sexo'] == 'ambos'){
    		$testeSexo = [
    			['sexo','<>',null]
    		];
    	}else{
    		$testeSexo = [
    			['se

    			/*xo','=',$busca['sexo']]
    		];
   /* 	}
    	if($busca['cidade_id'] == 'todos'){
    		$testeCidade = [
    			['cidade_id','<>',null]
    		];
    	}else{
    		$testeCidade = [
    			['cidade_id','=',$busca['cidade_id']]
    		];
    	} */
    	


    	$animais = Animais::where($testeespecie)->where($testeSexo)
        //->where($testeCidade)
    	
    	
    	->orderBy('id','desc')->get();



    	return view('site.busca',compact('busca','animais'));
    }
}
}