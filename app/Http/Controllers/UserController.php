<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        //Carrega a view
        return view('users.index');
    }

    public function create(){
        //Carregar a view
        return view('users/create');
    }

    public function store(UserRequest $request){
        //Validar o formulário
        $request->validated();
    }
}
