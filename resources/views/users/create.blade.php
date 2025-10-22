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
                class="row g-3"
            >
                @csrf
                @method('POST')

                <div class="col-md-12">
                    <label
                        for="name"
                        class="form-label"
                    >Nome</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        id="name"
                        value="{{ old('name') }}"
                        required
                        placeholder="Nome completo"
                    >
                </div>

                <div class="col-md-6">
                    <label
                        for="email"
                        class="form-label"
                    >Email</label>
                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        placeholder="Email"
                    >
                </div>

                <div class="col-md-6">
                    <label
                        for="password"
                        class="form-label"
                    >Senha</label>
                    <input
                        type="password"
                        class="form-control"
                        id="password"
                        name="password"
                        value="{{ old('password') }}"
                        required
                        placeholder="Senha"
                    >
                </div>

                <div class="col-12">
                <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </form>

@endsection
