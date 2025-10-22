@extends('layouts.admin')

@section('content')

    <a href="{{route('user.index')}}">Listar</a><br>
    <a href="{{route('user.show', ['user' => $user])}}">Visualizar</a><br>
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
                style="background:none; border:none; padding:0; color:red; text-decoration:underline; cursor:pointer;"
            >
                Excluir
            </button>
        </form>

    <h2>Editar usuários</h2>

    @if($errors->any()){
        @foreach ($errors->all() as $error)
            <p style="color: red;">
                {{ $error }}
            </p>
        @endforeach
        }
    @endif


    <form
        action="{{ route('user-update', ['user' => $user->id]) }}"
        method="POST"
    >
        @csrf
        @method('PUT')
        <label for="name">Nome: </label>
        <input
            type="text"
            id="name"
            name="name"
            value="{{ old('name', $user->name) }}"
            required
            placeholder="Nome completo"
        ><br><br>
        <label for="email">Email: </label>
        <input
            type="email"
            id="email"
            name="email"
            value="{{ old('email', $user->email) }}"
            required
            placeholder="Email"
        ><br><br>
        <label>Senha: </label>
        <input
            type="password"
            id="password"
            name="password"
            value="{{ old('password') }}"
            required
            placeholder="Senha"
        ><br><br>

        <button type="submit">Salvar</button>
    </form>
    
@endsection
