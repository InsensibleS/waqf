<?php

namespace App\Services;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
     * @param  Customer  $customer
     * @return void
     *
     */
    public function registerCustomer(Customer $customer)
    {
        $customer->is_registered = true;
        $customer->save();
    }

    /**
     *
     * @param  Request  $request
     * @return Customer
     *
     */
    public function findOrCreate(Request $request)
    {
       $customer = null;

        if($request->email !== null) {
            $customer = $this->customer->where('email', $request->email)->first();
        }

        if($customer === null) {
            $customerData = [
                'name' => $request->name,
                'email' => $request->email,
                'status_id' => 1
            ];
            $customer =  $this->customer->create($customerData);
        }
        return $customer;
    }

    /**
     *
     * @param  Customer  $customer
     * @return string
     *
     */
    public function createToken(Customer $customer): string
    {
        $token = Str::random(80);
        $customer->api_token = hash('sha256', $token);
        $customer->save();

        return $token;
    }
}
