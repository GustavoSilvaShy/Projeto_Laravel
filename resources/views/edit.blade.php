<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <h1>Editar Produto</h1>

    <form action="/produtos/{{ $produto->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <p>
            <label for="nome">Nome produto</label>
            <input type="text" id="nome" name="nome" value="{{ $produto->nome }}">
        </p>
        <p>
            <label for="preco">Preço produto</label>
            <input type="text" id="preco" name="preco" value="{{ $produto->preco }}">
        </p>

                        <img src="/{{$produto->imagem}}" style="max-width:100px;">


        <p>
            <label for="imagem">Imagem</label>
            <input type="file" id="imagem" name="imagem" accept="image/*">
        </p>
        <p>
            <button type="submit">Atualizar</button>
            <a href="/produtos">Voltar para a Lista</a>
        </p>
    </form>
</body>
</html>