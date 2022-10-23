<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(Request $r){
        return view('login');
    }
    public function login_action(Request $request){

        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        dd($validator);
    }


    public function register(Request $r){
        return view('register');
    }

    public function register_action(Request $request){

        /********************************** *
        Regras para registro
        -- usuario tem que ter um nome
        -- email tem q ser unico na tabela users
        -- todos os campos sao REQUIRED
        -- password tem que ter no mínimo 6 caracteres
        **********************************************/

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $data = $request->only('name', 'email', 'password');
        $userCreated = User::create($data);
        return redirect(route('login'));
    }
}
