<?php

namespace App\Repositories\Log;

use App\Repositories\BaseRepository;
use App\Models\Log;

class LogRepository extends BaseRepository implements LogRepositoryInterface
{
    public function getModel()
    {
        return Log::class;
    }
}