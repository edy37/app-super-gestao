<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;


class ContatoController extends Controller
{
    public function contato(Request $request) {

        //dd($request);
        /*
        echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        echo'<br>';
        echo $request->input('nome');
        echo'<br>';
        echo $request->input('mensagem');
        */

        /*
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');


        //print_r($contato->getAttributes());
        $contato->save();
        */

        //$contato = new SiteContato();
        //$contato->create($request->all());
        //$contato->fill($request->all());
        //$contato->save();

        //print_r($contato->getAttributes());

        $motivo_contatos = [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação',
        ];

        return view('site.contato', ['titulo' => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request){
        //dd($request);
        //SiteContato::create($request->all());
        $request->validate([
            'nome' => 'required | min:3 | max:50',
            /*'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mansagem' => 'required'
            */
        ]);
    }
}
