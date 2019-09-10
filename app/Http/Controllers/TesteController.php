<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    //
    public function index(Request $req)
    {
        $nome = $req->nome;
        echo "Hello $nome! via Teste Controler";
        return view('welcome');
    }

    public function index2($nome2)
    {
        echo "Hello 2 $nome2! via Teste Controler";
        return view('welcome');
    }
}
