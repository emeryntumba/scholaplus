<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthentificationController extends Controller
{
    //

    public function login(){

    }

    public function register(){
        return view('pages.auth.register');
    }

    public function sign_out(){

    }

    public function restore_pwd(){

    }
}
