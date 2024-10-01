<?php

namespace App\Controllers;

use App\Models\User;

class AuthController
{
    public function registerForm()
    {
        view('auth/register');
    }

    public function register()
    {
        if ($_POST['email'] && $_POST['password'] && $_POST['password'] === $_POST['password_confirm']) {
            $user = new User();
            $user->email = $_POST['email'];
            $user->password = $_POST['password'];
            $user->save();
            redirect('/login');
        } else {
            redirect('/register');
        }
    }

    public function loginForm()
    {
        view('auth/login');
    }

    public function login()
    {

    }

    public function logout()
    {

    }
}
