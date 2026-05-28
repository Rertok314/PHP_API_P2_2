<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Meus Produtos</title>
</head>
<body>

    <h1>Cadastro de Produtos</h1>
    
    <form action="/products" method="POST">
        @csrf
        <label>Nome do Produto:</label><br>
        <input type="text" name="name" required><br><br>
        
        <label>Preço:</label><br>
        <input type="number" step="0.01" name="price" required><br><br>
        
        <button type="submit">Cadastrar Produto</button>
    </form>

    <hr>

    <h2>Produtos Cadastrados</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->name }}</td>
                    <td>R$ {{ number_format($p->price, 2, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>