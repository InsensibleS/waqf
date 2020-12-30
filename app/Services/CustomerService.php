<?php

namespace App\Services;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerService
{
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     *
     * @param  Request  $request
     * @return Customer
     *
     */
    public function store ($request)
    {
        $request['status_id'] = 1;

        return $this->customer->create($request->all());
    }

    /**
     *
     * @param Request $request
     * @return Customer|null
     */
    public function checkClientExists(Request $request): ?Customer
    {
        return Customer::where('email', $request->email)->first();
    }

    /**
     *
     * @param  Request  $request
     * @return Customer
     *
     */
    public function findByRegistrationString(Request $request): Customer
    {
        return Customer::where('registration_string', $request->registration_string)->first();
    }

    /**
     *
     * @param  Request  $request
     * @return void
     *
     */
    public function registerCustomer(Customer $customer)
    {
        $customer->is_registered = true;
        $customer->save();
    }
}
