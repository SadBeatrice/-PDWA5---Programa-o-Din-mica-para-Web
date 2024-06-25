<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caneta;

class XmlController extends Controller
{
    public function gerarXML(){
        // Buscar os dados no Banco
        $dados = Caneta::all();
        //print_r($dados);

        // Retornar uma View com os dados
        return response()->view('data-xml', ['registros' => $dados])->header('Content-Type','application/xml');
    }
}
