<?php

namespace App\Http\Controllers;


class Controller
{
    protected $repository;

    protected $service;

    public function __construct($repository, $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }
}