@extends('layouts.admin')

@section('content')

    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header hstack gap-2">
            <span>Detalhes do usuário</span>
            <span class="ms-auto d-sm-flex flex-row gap-1">



                <a
                    href="{{route('user.index')}}"
                    class="btn btn-info"
                >Listar</a><br>
                <a
                    href="{{route('user.edit', ['user' => $user])}}"
                    class="btn btn-warning"
                >Editar</a><br>
                <form
                    action="{{ route('user.destroy', ['user' => $user->id]) }}"
                    method="POST"
                    style="display:inline;"
                >
                    @csrf
                    @method('DELETE')
                    <button
                        type="submit"
                        class="btn btn-danger"
                        onclick="return confirm('Tem certeza que deseja excluir este usuário?')"
                    >
                        Excluir
                    </button>
                </form>


            </span>
        </div>

        <div class="card-body">

            <x-alert />


            <dl class="row">
                <dt class="col-sm-3">ID</dt>
                <dd class="col-sm-9">{{ $user->id }}</dd>
                <dl class="row">
                    <dt class="col-sm-3">Nome</dt>
                    <dd class="col-sm-9">{{ $user->name }}</dd>
                    <dl class="row">
                        <dt class="col-sm-3">E-mail</dt>
                        <dd class="col-sm-9">{{ $user->email }}</dd>
                        <dl class="row">
                            <dt class="col-sm-3">Cadastrado</dt>
                            <dd class="col-sm-9">{{ $user->created_at->format('d/m/Y H:i:s') }}</dd>
                            <dl class="row">
                                <dt class="col-sm-3">Atualizado</dt>
                                <dd class="col-sm-9">{{ $user->updated_at->format('d/m/Y H:i:s') }}</dd>
                            </dl>
        </div>
    </div>

@endsection