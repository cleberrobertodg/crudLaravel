@extends('layouts.admin')

@section('content')

    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header hstack gap-2">
            <span>Cadastrar usuário</span>
            <span class="ms-auto d-sm-flex flex-row gap-1">



                <a
                    href="{{route('user.index')}}"
                    class="btn btn-info"
                >Listar</a><br>



            </span>
        </div>

        <div class="card-body">

            <x-alert />




            

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
