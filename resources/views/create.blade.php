<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
</head>
<body>
    <h1>Cadastrar Produto</h1>

    <form action="/produtos" method="post">
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
            <button type="submit">Salvar</button>
        </p>
    </form>
</body>
</html>