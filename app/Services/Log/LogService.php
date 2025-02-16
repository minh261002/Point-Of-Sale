<?php

namespace App\Services\Log;

use App\Repositories\Log\LogRepositoryInterface;

class LogService implements LogServiceInterface
{
    protected $repository;

    public function __construct(
        LogRepositoryInterface $repository
    ) {
        $this->repository = $repository;
    }
}