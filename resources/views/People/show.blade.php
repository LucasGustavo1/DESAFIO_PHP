<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Usuário</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Detalhes do Usuário</h2>
            </div>
            <div class="card-body">
                <a href="{{ route('people.index') }}" class="btn btn-primary mb-3">Voltar</a>
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <td>{{ $user->id }}</td>
                    </tr>
                    <tr>
                        <th>Nome</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th>Sobrenome</th>
                        <td>{{ $user->sobrenome }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th>Telefone</th>
                        <td>{{ $user->telefone }}</td>
                    </tr>
                    <tr>
                        <th>Data de Nascimento</th>
                        <td>{{ $user->data_de_nascimento }}</td>
                    </tr>
                    <tr>
                        <th>Criado em</th>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                    <tr>
                        <th>Atualizado em</th>
                        <td>{{ $user->updated_at }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
