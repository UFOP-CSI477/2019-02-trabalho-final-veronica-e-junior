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
            $animal->imagem = $diretorio.'/'.$nomeArquivo;
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

    public function pedidos(){
        $usuarioID = auth()->user()->id;
        $animais = DB::table('adotars')
            ->join('users', 'adotars.user_pedinte_id', '=', 'users.id')
            ->join('animals', 'adotars.animal_id', '=', 'animals.id')
            ->select('adotars.*', 'users.name as pedinte_nome', 'email', 'animals.id as animal_id', 'animals.nome as animal_nome')
            ->where('adotars.user_dono_id', '=', $usuarioID)
            ->get();
            //dd($animais);

        return view('admin.pedidos', compact('animais'));
    }

    public function meusPedidos(){
        $usuarioID = auth()->user()->id;
        $animais = DB::table('adotars')
            ->where('user_pedinte_id', '=', $usuarioID)
            ->join('animals', 'adotars.animal_id', '=', 'animals.id')
            ->select('adotars.*', 'animals.nome as animal_nome')
            ->get();
            //dd($animais);
        return view('admin.meus_pedidos', compact('animais'));
    }

    public function finalizar($id){
           Animal::find($id)->delete();
        return redirect()->route('admin.cadastrar-final');
    }

     public function editar($id)
    {
        $registro = Animal::find($id);

       // dd($registro);
        return view('admin.editar',compact('registro'));
        
    }

    public function atualizar(Request $request, $id)
    {
        $animal = Animal::find($id);
        $dados = $request->all();

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
            $animal->imagem = $diretorio.'/'.$nomeArquivo;
        }

        
        $animal ->update();

        \Session::flash('mensagem',['msg'=>'Atualizado com sucesso!','class'=>'green white-text']);

        return redirect()->route('admin.perfil');
    }

}
