@extends('layouts.admin')

@section('content')

    <a href="{{ route('user.index') }}">Listar</a><br>
    <h2>Cadastrar usuário</h2>

    @if($errors->any()){
        @foreach ($errors->all() as $error)
            <p style="color: red;">
                {{ $error }}
            </p>
        @endforeach
        }
    @endif

    <form
        action="{{ route('user-store') }}"
        method="POST"
    >
        @csrf
        @method('POST')
        <label for="name">Nome: </label>
        <input
            type="text"
            id="name"
            name="name"
            value="{{ old('name') }}"
            required
            placeholder="Nome completo"
        ><br><br>
        <label for="email">Email: </label>
        <input
            type="email"
            id="email"
            name="email"
            value="{{ old('email') }}"
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

        <button type="submit">Cadastrar</button>
    </form>

@endsection
