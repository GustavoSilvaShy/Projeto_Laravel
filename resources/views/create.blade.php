<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <h1>Cadastrar Produto</h1>

    <form action="/produtos" method="post" enctype="multipart/form-data">
        @csrf
        <p>
            <label for="nome">Nome produto</label>
            <input type="text" id="nome" name="nome">
        </p>
        <p>
            <label for="preco">Preço produto</label>
            <input type="text" id="preco" name="preco">
        </p>
        <p>
            <label for="imagem">Imagem</label>
            <input type="file" id="imagem" name="imagem" accept="image/*">
        </p>
        <p>
            <button type="submit">Salvar</button>
        </p>
    </form>
</body>
</html>