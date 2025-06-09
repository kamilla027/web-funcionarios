<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FuncionarioController extends Controller
{
    private $api = 'https://webapptech.site/apifuncionarios/api/funcionarios/';

    public function index()
    {
        $response = Http::get($this->api);
        $funcionarios = $response->successful() ? $response->json() : [];
        return view('funcionarios.index', compact('funcionarios'));
    }

    public function create()
    {
        return view('funcionarios.create');
    }

    public function store(Request $request)
    {
        Http::post($this->api, $request->only([
            'nome_funcionario', 'funcao_funcionario', 'setor'
        ]));
        return redirect('/funcionarios')->with('success', 'Funcionário cadastrado!');
    }

    public function edit($id)
    {
        $response = Http::get($this->api . $id);
        $funcionario = $response->json();
        return view('funcionarios.edit', compact('funcionario'));
    }

    public function update(Request $request, $id)
    {
        Http::put($this->api . $id, $request->only([
            'nome_funcionario', 'funcao_funcionario', 'setor'
        ]));
        return redirect('/funcionarios')->with('success', 'Funcionário atualizado!');
    }

    public function destroy($id)
    {
        Http::delete($this->api . $id);
        return redirect('/funcionarios')->with('success', 'Funcionário excluído!');
    }
}
