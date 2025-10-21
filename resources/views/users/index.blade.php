<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    <title>CRUD Laravel</title>
</head>

<body>

    <a href="{{route('user.create')}}">Cadastrar</a><br>
    <h2>Listar usuários</h2>

    @if (session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>

    @endif


    @forelse ($users as $user)
       ID: {{ $user->id }}<br>
       Nome: {{ $user->name }}<br>
       E-mail: {{ $user->email }}<br><hr>
    @empty

    @endforelse
</body>

</html>
