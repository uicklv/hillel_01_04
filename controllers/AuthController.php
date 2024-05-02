<?php

class AuthController
{
    use Validator;

    public function register()
    {
        $data = [
            'name' => 'John',
            'email' => 'email@gmail.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $rules = [
            'name' => 'required|max:50|min:2',
            'password' => 'required|max:255|min:8|confirmed',
            'email' => 'required|email|max:255',
        ];

        if (!$this->isEqual($data['password'], $data['password_confirmation'])) {
            throw new Exception('passwords not equal');
        }

        if (!$this->maxLength($data['name'], 25)) {
            throw new Exception('name is too long');
        }

        if (!$this->minLength($data['name'], 2)) {
            throw new Exception('name is too short');
        }

        //todo register process

        echo 'register success!';
    }
}