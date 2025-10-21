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
        E-mail: {{ $user->email }}<br>
        <a href="{{ route('user.show', ['user' => $user]) }}">Visualizar</a><br>
        <a href="{{ route('user.edit', ['user' => $user]) }}">Editar</a><br>
        <form
            action="{{ route('user.destroy', ['user' => $user->id]) }}"
            method="POST"
            style="display:inline;"
        >
            @csrf
            @method('DELETE')
            <button
                type="submit"
                onclick="return confirm('Tem certeza que deseja excluir este usuário?')"
                style="background:none; border:none; padding:0; color:blue; text-decoration:underline; cursor:pointer;"
            >
                Excluir
            </button>
        </form>
        <hr>
    @empty

    @endforelse
</body>

</html>
