<?php

namespace App\Http\Controllers;

use App\Models\Produto;   
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index() {
        $produtos = Produto::all();

        return view("index", ["produtos" => $produtos]);
    }

    public function create() {
        return view("create");
    }
    public function store(Request $request) {
        //Pegando dados do formulario
        $dados = $request->only(['nome', 'preco']);
        // INSERT INTO produtos (nome, preco) values ()
        Produto::create($dados);
        //redirecionando para /produtos
        return redirect()->to('/produtos')->with('sucesso', 'Produto cadastrado com sucesso');
    }
}
