<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            'nome' => "Jose",
            'nome' => "Joao"
        ];

        dd($users);
    }
}
