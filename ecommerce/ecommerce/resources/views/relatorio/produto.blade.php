<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>Relatório</title>

    <style>
        body {
            font-family: 'lato', sans-serif;
        }

        .container {
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 10px;
            padding-right: 10px;
        }

        table {
            width: 100%;
        }

        .table-header {
            background-color: #95A5A6;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.03em;
        }

        .col {
            text-align: center;
        }

        td {
            color: black;
        }
    </style>

</head>
<body>
    <table class="container">
        <thead class="table-header">
            <tr>
                <th colspan="4">
                    Lista de Produtos
                </th>
            </tr>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Quantidade em estoque</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $p)
                <tr>
                    <td class="col">{{$p->nome}}</td>
                    <td class="col">{{$p->descricao}}</td>
                    <td class="col">{{$p->preco}}</td>
                    <td class="col">{{$p->quantidade}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
