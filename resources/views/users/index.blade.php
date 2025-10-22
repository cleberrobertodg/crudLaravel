@extends('layouts.admin')

@section('content')

    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header hstack gap-2">
            <span>Lista de usuários</span>
            <span class=" ms-auto">
                <a href="{{route('user.create')}} "type="button" class="btn btn-success">Cadastrar</a>
            </span>
        </div>



        @if (session('success'))
            <p style="color: green;">
                {{ session('success') }}
            </p>

        @endif


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th
                        scope="col"
                        class="text-center"
                    >Ações</th>
                </tr>
            </thead>
            <tbody>


                @forelse ($users as $user)

                    <tr>
                        <th>{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-center">
                            <a
                                href="{{ route('user.show', ['user' => $user]) }}"
                                type="button"
                                class="btn btn-primary btn-sm"
                            >Visualizar</a>
                            <a
                                href="{{ route('user.edit', ['user' => $user]) }}"
                                type="button"
                                class="btn btn-warning btn-sm"
                            >Editar</a>
                            <form
                                action="{{ route('user.destroy', ['user' => $user->id]) }}"
                                method="POST"
                                style="display:inline;"
                            >
                                @csrf
                                @method('DELETE')
                                <button
                                    type="button"
                                    class="btn btn-danger btn-sm"
                                >Excluir</button>
                            </form>
                        </td>
                    </tr>

                    <hr>
                @empty

                @endforelse

            </tbody>
        </table>

    </div>

@endsection
