<?php

namespace App\Services\Customer;


use App\Repositories\Customer\CustomerRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerService implements CustomerServiceInterface
{
    protected $repository;

    public function __construct(CustomerRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function store(Request $request)
    {
        $data = $request->validated();

        $data['image'] = $data['image'] ?? '/not-found.jpg';

        $data['password'] = Hash::make($data['password']);

        if ($data['birthday']) {
            $data['birthday'] = date('Y-m-d', strtotime($data['birthday']));
        }

        return $this->repository->create($data);
    }

    public function update(Request $request)
    {
        $data = $request->validated();
        $data['image'] = $data['image'] ?? '/not-found.jpg';

        if ($data['password']) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        return $this->repository->update($data['id'], $data);
    }

}
