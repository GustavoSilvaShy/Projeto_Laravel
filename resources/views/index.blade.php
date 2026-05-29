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
        </div>
        <hr>
    @endforeach
</body>
</html>