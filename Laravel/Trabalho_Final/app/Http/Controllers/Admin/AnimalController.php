<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Animal;
use DB;

class AnimalController extends Controller
{


    public function index()
    {
        $animais = Animal::all();
        return view('admin.imoveis.index',compact('animais'));
    }


    public function cadastrarAnimal(){
        return view('admin.cadastroAnimal');
    }

    public function salvarAnimal(Request $request ){
        $dados = $request->all();
        //dd($dados);
        
        $animal = new Animal();
        $animal->user_dono_id = $dados['id'];
        $animal->especie = $dados['especie'];
        $animal->sexo = $dados['sexo'];
        $animal->nome = $dados['nome'];
        $animal->descricao = $dados['descricao'];
        $animal->cidade = $dados['cidade'];
        $animal->estado = $dados['estado'];
        $animal->cep = $dados['cep'];
         $file = $request->file('imagem');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/animais/".str_slug($dados['nome'],'_')."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $registro->imagem = $diretorio.'/'.$nomeArquivo;
        }

        $animal->save();
         \Session::flash('mensagem',['msg'=>'Animal cadastrado para adoção com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.perfil');
    }

    public function meusAnimais(){
        $usuarioID = auth()->user()->id;
        $animais = DB::table('animals')
            ->where('user_dono_id', '=', $usuarioID)
            ->get();
            //dd($animais);

        return view('admin.meusAnimais', compact('animais'));
    }

}
