<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    return view('login');
});

Route::get('/perfil', function () {
    $nome = request('nome'); // busca pelo nome
    $response = Http::get("https://webapptech.site/apifuncionarios/api/funcionarios");

    $dados = collect($response->json()['data'])->firstWhere('nome_funcionario', $nome);

    return view('perfil', ['funcionario' => $dados]);
});
