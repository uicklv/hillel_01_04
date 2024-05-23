<?php

class AuthController
{
    use Validator;
    public function register()
    {
        view('register');
    }


    public function registerProcess()
    {
        $this->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirm'],
        ]);

        //todo insert new user to DB
        echo Request::get('name');
    }

    public function login()
    {

    }

    public function auth()
    {

    }
}