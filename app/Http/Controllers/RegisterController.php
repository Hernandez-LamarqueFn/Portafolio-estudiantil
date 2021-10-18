<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){

        $this->validate(request(),[
            'name' => 'requiered',
            'email' => 'requiered|email',
            'password' => 'requiered|confirmed',
        ]);

        $user = User::create(request(['name','email','carrera','password']));

        auth()->login($user);
        return redirect()-> to('/');
    }
}
