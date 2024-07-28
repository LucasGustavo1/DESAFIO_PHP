<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Editar Usuário</h2>
            </div>
            <div class="card-body">
                @if (session('erro'))
                    <div class="alert alert-danger">
                        {{ session('erro') }}
                    </div>
                @endif

                <form action="{{ route('people.update', $user->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="sobrenome" name="sobrenome"
                            value="{{ $user->sobrenome }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone"
                            value="{{ $user->telefone }}">
                    </div>
                    <div class="form-group">
                        <label for="data_de_nascimento">Data de Nascimento</label>
                        <input type="date" class="form-control" id="data_de_nascimento" name="data_de_nascimento"
                            value="{{ $user->data_de_nascimento }}">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha (deixe em branco para não alterar)</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Atualizar Usuário</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
