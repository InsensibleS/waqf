<?php

namespace App\Services;

use App\Models\Customer;

class CustomerService
{
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function store ($request)
    {
        $request['status_id'] = 1;

        return $this->customer->create($request->all());
    }
}
