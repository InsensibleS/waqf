<?php

namespace App\Services;

use App\Models\Customer;

class EmailService
{
//    protected $customer;
//
//    public function __construct(Customer $customer)
//    {
//        $this->customer = $customer;
//    }

    public function sendLinkToEmail($request)
    {
        $request['status_id'] = 1;

        return $this->customer->create($request->all());
    }
}
