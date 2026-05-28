<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Visualização da API</title>
</head>
<body>

    <h1>Dados da API</h1>
    <p>Esta página demonstra os dados que a API entrega para sistemas externos.</p>
    
    <a href="/">Voltar para o Painel de Cadastro</a>
    <hr>

    <h3>Lista de dados estruturada:</h3>
    
    @foreach($products as $p)
        <div style="margin-bottom: 20px;">
            <dl>
                <dt><strong>Produto ID: {{ $p->id }}</strong></dt>
                <dd>Nome: <code>{{ $p->name }}</code></dd>
                <dd>Preço: <code>R$ {{ number_format($p->price, 2, ',', '.') }}</code></dd>
                <dd>Registrado em: <small>{{ $p->created_at }}</small></dd>
            </dl>
        </div>
    @endforeach

    <hr>
    <p><small>Fim dos registros.</small></p>

</body>
</html>