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
      $animais = Animal::where('cidade', 'LIKE', '%'.$request->texto.'%')->where('especie', 'LIKE', '%'.$request->especie.'%')->where('sexo', 'LIKE', '%'.$request->sexo.'%')->get();
    return view('site.busca',compact('animais'));
    	


    	$animais = Animais::where($testeespecie)->where($testeSexo)->get();
        //->where($testeCidade)->orderBy('id','desc')->get();
    }
}
