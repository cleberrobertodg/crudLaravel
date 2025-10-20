<?php

namespace App\Http\Controllers;

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

    public function store(){
        return ;
    }
}
