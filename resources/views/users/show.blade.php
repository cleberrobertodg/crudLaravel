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
    <title>Show</title>
</head>

<body>
    <a href="{{route('user.index')}}">Listar</a><br>
    <a href="{{route('user.edit', ['user' => $user])}}">Editar</a><br>
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

    <h2>Visualizar usuários</h2>

    ID: {{ $user->id }} <br>
    Nome: {{ $user->name }} <br>
    E-mail: {{ $user->email }} <br>
    Cadastrado: {{ $user->created_at->format('d/m/Y H:i:s') }} <br>
    Atualizado: {{ $user->updated_at->format('d/m/Y H:i:s') }} <br>

</body>

</html>
