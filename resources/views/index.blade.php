<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    @if (session('sucesso'))
        <p> {{ session('sucesso') }}</p>
    @endif
    <br>

    <form action="/produtos/buscar" method="get">
        <input type="text" name="busca" value="{{ $busca ?? '' }}">
        <button type="submit">Buscar</button>

        @if($busca)
            <a href="/produtos"> Limpar </a>
        @endif

    </form>

    <a href="/produtos/create">Novo produto</a>
    <br>
    @foreach ($produtos as $produto)
        <div>
            @if($produto->imagem)
                <img src="/{{$produto->imagem}}" style="max-width:100px;">

            @endif
            <p>{{ $produto->id }}</p>
            <p>{{ $produto->nome }}</p>
            <p>R$ {{number_format ($produto->preco, 2, ',', '.') }}</p>
            <p>{{ $produto->created_at }}</p>  
            
            <form action="/produtos/{{ $produto->id }}" method="post" onsubmit="return confirm('Deseja excluir este produto?')">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>

            <a href="/produtos/{{ $produto->id}}/edit">Editar </a>
        </div>
        <hr>
    @endforeach
</body>
</html>