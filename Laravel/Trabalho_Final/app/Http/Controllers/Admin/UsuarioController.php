<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Animal;
class UsuarioController extends Controller
{
    public function login(Request $request){
        $dados= $request->all();
       // dd($dados);
        if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['password']])){
            \Session::flash('mensagem',['msg'=>'Login realizado com sucesso!','class'=>'green white-text']);
            return redirect()->route('site.home');
        }
        \Session::flash('mensagem',['msg'=>'Erro! Email ou senha incorretos.','class'=>'red white-text']);
        return redirect()->route('admin.login');
    }

    public function perfil(){
        //dd('oi');
        return view('admin.perfil');
    }

    public function cadastrar(){
        return view('admin.cadastrar');
    }

    public function salvar(Request $request){
        $dados = $request->all();
        //dd($dados);

        $usuario = new User();
        $usuario->name = $dados['name'];
        $usuario->email = $dados['email'];
        $usuario->password = bcrypt($dados['password']);
        $usuario->save();

        return redirect()->route('admin.login');
    }

}
