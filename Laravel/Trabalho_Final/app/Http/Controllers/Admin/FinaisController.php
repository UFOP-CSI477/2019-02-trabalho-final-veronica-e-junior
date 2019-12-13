<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FinaisController extends Controller
{
     public function cadastrarFinal(){
        return view('admin.cadastroAnimal');
    }

    public function salvarFinal(Request $request ){
        $dados = $request->all();
        //dd($dados);
        
        $final = new Final();
        $final->descricao = $dados['descricao'];
         $file = $request->file('imagem');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/finais/".str_slug($dados['descricao'],'_')."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $final->imagem = $diretorio.'/'.$nomeArquivo;
        }

       $final->save();
        return redirect()->route('admin.perfil');
    }
}
