<?php

namespace App\Services\Permission;

use Illuminate\Http\Request;

interface PermissionServiceInterface
{
    public function store(Request $request);
    public function update(Request $request);
}