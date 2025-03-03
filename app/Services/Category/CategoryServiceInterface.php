<?php

namespace App\Services\Category;

use Illuminate\Http\Request;

interface CategoryServiceInterface
{
    public function store(Request $request);

    public function update(Request $request);
}