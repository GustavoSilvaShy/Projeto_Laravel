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
        if ($request->hasFile('imagem')) {
            $pasta = public_path('images/produtos');
            if (!is_dir($pasta)) {
                mkdir($pasta, 0755, true);
            }
            $extensaoImagem = $request->file('imagem')->getClientOriginalExtension();
            $nomeImagem = uniqid() . '.' . $extensaoImagem;

            $dados['imagem'] = "images/produtos/" . $nomeImagem;
            $request->file('imagem')->move($pasta, $nomeImagem);

    }
             
        Produto::create($dados);
        //redirecionando para /produtos
        return redirect()->to('/produtos')->with('sucesso', 'Produto cadastrado com sucesso');
    }

        public function deletar($id) {
            $produto = Produto::findOrFail($id);
            $produto->delete();

            return redirect()->to("produtos")->with("sucesso", "Produto removido com sucesso");
            }
}
