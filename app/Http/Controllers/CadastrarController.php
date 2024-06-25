<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caneta;

class CadastrarController extends Controller
{
    // Regra de negócio
    public function salvar(Request $request){

        $request->validate([
            'cor' => 'required|string',
            'tipo_de_tinta' => 'required|string|in:Nanquim,Gel,Hidrográfica',
            'marca' => 'required|string',
            'ponta' => 'required|string',
            'material_do_corpo' => 'required|string',
        ], 
        [
            'cor.required' => 'A cor é obrigatória.',
            'cor.string' => 'A cor deve ser um texto válido.',
            
            'tipo_de_tinta.required' => 'O tipo de tinta é obrigatório.',
            'tipo_de_tinta.string' => 'O tipo de tinta deve ser um texto válido.',
            'tipo_de_tinta.in' => 'O tipo de tinta deve ser um dos seguintes: Nanquim, Gel ou Hidrográfica.',
            
            'marca.required' => 'A marca é obrigatória.',
            'marca.string' => 'A marca deve ser um texto válido.',
            
            'ponta.required' => 'A ponta é obrigatória.',
            'ponta.string' => 'A ponta deve ser um texto válido.',
            
            'material_do_corpo.required' => 'O material do corpo é obrigatório.',
            'material_do_corpo.string' => 'O material do corpo deve ser um texto válido.',
        ]);

        $caneta = new Caneta();
        $caneta->fill($request->all());
        $caneta->save();

        return view('cadastrosalvo');
    }
}
