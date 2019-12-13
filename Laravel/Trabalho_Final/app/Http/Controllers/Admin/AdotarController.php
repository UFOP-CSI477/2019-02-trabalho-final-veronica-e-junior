<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Animal;
use DB;
use App\Adotar;
use App\finais_felizes;

class AdotarController extends Controller
{
    public function salvar(Request $request){
    	$dados = $request->all();
       	$adotar = new Adotar();
        $adotar->user_dono_id = $dados['user_dono_id'];
        $adotar->user_pedinte_id = $dados['user_pedinte_id'];
        $adotar->animal_id = ($dados['animal_id']);
       $adotar->save();

        return redirect()->route('site.home');
    }



        public function finalizar($id, $animal_id){
            $dados = $id;
            $animal = $animal_id;
          // dd($dad);

          /* $animal = DB::table('adotars')
            ->where('adotars.id', '=', $dados)
            //->join('users', 'adotars.user_pedinte_id', '=', 'users.id')
            ->join('animals', 'adotars.animal_id', '=', 'animals.id')
            ->select('animals.id as animal_id')
            ->get();*/

           // $finais_felizes->user_id = $animais->user_id;
            
           // dd($animal);


           //Salva nos finais felizes
       /* $finais_felizes->user_id = $dados['user_id'];
        $finais_felizes->adocao_id = $dados['adocao_id'];
        $finais_felizes->animal_id = ($dados['animal_id']);
        $file = $request->file('imagem');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/finais/".str_slug($dados['nome'],'_')."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $finais_felizes->imagem = $diretorio.'/'.$nomeArquivo;
        }*/

         //$finais_felizes->save();*/
        
       //Deleta da tabela de adotar
        Animal::find($animal)->delete();
        Adotar::find($dados)->delete(); 
        
        return redirect()->route('admin.cadastrar-final');

        //Precisa deletar de animais agora

        //return redirect()->route('admin.cadastrarfinaisfelizes');
    }
}
