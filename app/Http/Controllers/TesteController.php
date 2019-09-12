<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TesteController extends Controller
{
    //
    public function post_index(Request $req)
    {
        if ($req->post('telefone')) {
            $telefone =$req->post('telefone');
            dd($telefone);
        }
        $nome = $req->nome;
        $ola = 'mundo';
        return view('index',compact(['ola','nome','telefone','errors']));
    }
    public function index(Request $req)
    {
        $telefone = '';
        $validador = Validator::make($req->all(),['nome' => 'required|max:10']);
        if ($validador->fails()){
            $errors = $validador->errors()->all();
        }
        $nome = $req->nome;
        $ola = 'mundo';
        return view('index',compact(['ola','nome','telefone','errors']));
        
    }

    public function index_old2(Request $req)
    {
        $validador = Validator::make($req->all(),['nome' => 'required|max:10']);
        if ($validador->fails()){
            dd($validador->errors());
        }
        try{
            $req->validate(
                ['nome' => 'required']
            );
            echo 'Hello '.$req->nome.'! via Teste Controler';
            return view('welcome');               
        }catch(Exception $e){
            echo $e->getMessage();
        }
        
    }

    public function index_old1(Request $req)
    {
        try{
            $req->validate(
                ['nome' => 'required']
            );
            echo 'Hello '.$req->nome.'! via Teste Controler';
            return view('welcome');               
        }catch(Exception $e){
            echo $e->getMessage();
        }
        
    }

    public function index2($nome2)
    {
        echo "Hello 2 $nome2! via Teste Controler";
        return view('welcome');
    }
}
