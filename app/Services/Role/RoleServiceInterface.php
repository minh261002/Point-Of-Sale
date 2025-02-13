<?php

namespace App\Services\Role;

use Illuminate\Http\Request;

interface RoleServiceInterface
{
    public function store(Request $request);

    public function update(Request $request);
}
