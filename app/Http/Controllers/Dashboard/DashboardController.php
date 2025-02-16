<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Repositories\Log\LogRepositoryInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController
{
    protected $logRepository;

    public function __construct(LogRepositoryInterface $logRepository)
    {
        $this->logRepository = $logRepository;
    }

    public function index(): View
    {
        $logs = $this->logRepository->getQueryBuilderOrderBy()->get();
        // dd($logs);
        return view('dashboard.index', [
            'logs' => $logs
        ]);
    }
}