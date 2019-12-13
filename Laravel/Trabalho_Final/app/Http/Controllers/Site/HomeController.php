<?php



namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Animal;

class HomeController extends Controller
{


	public function index()
    {
    	$animais = Animal::All();
    	//$slides = Slide::where('publicado','=','sim')->orderBy('ordem')->get();
    	//$direcaoImagem = ['center-align','left-align','right-align'];
    	$paginacao = true;

    	return view('site.home',compact('animais'));
    }

    public function busca(Request $request)
    {
    	$busca = $request->all();
    	

    	$paginacao = false;

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
    	}
    	if($busca['cidade_id'] == 'todos'){
    		$testeCidade = [
    			['cidade_id','<>',null]
    		];
    	}else{
    		$testeCidade = [
    			['cidade_id','=',$busca['cidade_id']]
    		];
    	}

    	$testeDorm = [
    		['dormitorios','>=', 0],
    		['dormitorios','=', 1],
    		['dormitorios','=', 2],
    		['dormitorios','=', 3],
    		['dormitorios','>', 3],
    	];
    	$numDorm = $busca['dormitorios'];

    	$testeValor = [
    		[['valor','>=','0']],
          	[['valor','<=','500']],
          	[['valor','>=','500'],['valor','<=','1000']],
          	[['valor','>=','1000'],['valor','<=','5000']],
          	[['valor','>=','5000'],['valor','<=','10000']],
          	[['valor','>=','10000'],['valor','<=','50000']],
          	[['valor','>=','50000'],['valor','<=','100000']],
          	[['valor','>=','100000'],['valor','<=','200000']],
          	[['valor','>=','200000'],['valor','<=','300000']],
          	[['valor','>=','300000'],['valor','<=','500000']],
          	[['valor','>=','500000'],['valor','<=','1000000']],
          	[['valor','>=','1000000']]
    		
    	];
    	$numValor = $busca['valor'];

    	if($busca['bairro'] != ''){
    		$testeBairro = [
    			['endereco','like','%'.$busca['bairro'].'%']
    		];
    	}else{
    		$testeBairro = [
    			['endereco','<>',null]
    		];
    	}
    	


    	$imoveis = Imovel::where('publicar','=','sim')
    	->where($testeStatus)
    	->where($testeSexo)
    	->where($testeCidade)
    	->where([$testeDorm[$numDorm]])
    	->where($testeValor[$numValor])
    	->where($testeBairro)
    	
    	
    	->orderBy('id','desc')->get();



    	return view('site.busca',compact('busca','imoveis','paginacao','tipos','cidades'));
    }
}
