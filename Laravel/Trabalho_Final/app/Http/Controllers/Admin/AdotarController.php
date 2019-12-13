<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Animal;
use App\Adotar;

class AdotarController extends Controller
{
    public function salvar(Request $request){
        $dados = $request->all();
        //dd($dados);

        $adotar = new Adotar();
        $adotar->user_dono_id = $dados['user_dono_id'];
        $adotar->user_pedinte_id = $dados['user_pedinte_id'];
        $adotar->animal_id = ($dados['animal_id']);
        $adotar->save();

        return redirect()->route('site.home');
    }
}
