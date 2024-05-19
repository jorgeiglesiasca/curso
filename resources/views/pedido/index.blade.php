<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>PEDIDOS:</h1>
    
    <ul>
        @forelse ($pedidos as $pedido)
            <li>{{ $pedido->nombre }}</li>
        @empty
            <h1>La lista está vacia</h1>
        @endforelse
    </ul>
</body>
</html>