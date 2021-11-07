<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index()
    {
        // dd('Olá Mundo!');

        // $nome = 'Alex'; //Criando uma variavel nome
        // $id = 1;

        $jogos = Jogo::all();
        // dd($jogos);
        // return view('jogos.index', ['nome' => $nome, 'id' => $id]); //Nome recebe $nome
        return view('jogos.index', ['jogos' => $jogos]);
    }

    public function create()
    {
        return view('jogos.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Jogo::create($request->all());

        return redirect()->route('jogos-index');
    }

    public function edit($id)
    {
        $jogos = Jogo::where('id', $id)->first();
        if (!empty($jogos)) {
            return view('jogos.edit', ['jogos' => $jogos]);
        } else {
            return redirect()->route('jogos-index');
        }
    }

    public function update(Request $request, $id)
    {
        
        $data = [
            'nome' => $request->nome,
            'categoria' => $request->categoria,
            'ano_criacao' => $request->ano_criacao,
            'valor' => $request->valor
        ];

        Jogo::where('id', $id)->update($data);

        return redirect()->route('jogos-index');
    }

    public function destroy($id)
    {
        Jogo::where('id', $id)->delete();

        return redirect()->route('jogos-index');
    }
}
