<?php

namespace App\Services\User;

use Illuminate\Http\Request;

interface UserServiceInterface
{
    public function store(Request $request);

    public function update(Request $request);
}