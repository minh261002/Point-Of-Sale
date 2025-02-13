<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AuthController
{
    public function login(): View
    {
        return view('auth.login');
    }
}