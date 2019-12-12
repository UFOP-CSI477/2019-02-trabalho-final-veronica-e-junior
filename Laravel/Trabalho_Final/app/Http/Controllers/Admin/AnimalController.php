<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Animal;

class AnimalController extends Controller
{
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
        $animal->save();
        return redirect()->route('admin.perfil');
    }
}
