<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        //Listar os usuários registrados no banco de dados
        $users = User::orderByDesc('id')->get();

        //Carrega a view
        return view('users.index', ['users' => $users]);
    }

    public function show(User $user){

        return view('users.show', ['user' => $user]);
    }

    public function create(){
        //Carregar a view
        return view('users/create');
    }

    public function store(UserRequest $request){
        //Validar o formulário
        $request->validated();

        //Cadastrar usuário no banco de dados
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect()->route('user.index')->with('success', 'Usuário cadastrado com sucesso!');
    }
}
