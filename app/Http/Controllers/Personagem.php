<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personagens;

class Personagem extends Controller
{
    function view(){
        return view('cadastrar-personagem');   
    }
    function salvarPersonagem(Request $dados){
        //criar codigo para salvar no BD
        $personagem = new Personagens();
        $personagem -> create($dados->all());
        
        // $personagem = $dados->all();
        // $personagem ->save();
    }
    
    function listarPersonagem(){
        $personagem = Personagem::all() ->toArray()->paginate(3);
        return view('listar-personagem', ['personagem' => $personagem]);
    }
}
