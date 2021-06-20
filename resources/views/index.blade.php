<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1>Clientes</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-Mail</th>
        </tr>
    @forelse ($clientes as $cliente)
        <tr>
            <td> {{ $cliente->id }} </td>
            <td> {{ $cliente->nome_completo }} </td>
            <td> {{ $cliente->email }} </td>
        </tr>
    @empty
        
    @endforelse

    </table>

    <a href="{{ route('clientes.create') }}">Criar Cliente</a>
</body>
</html>