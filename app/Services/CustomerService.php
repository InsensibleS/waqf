<?php

namespace App\Services;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CustomerService
{
    private const PUBLIC_PATH = '/public/customer-photos/';
    private const FILES_PATH = 'customer-photos/';

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
     * @param string|null $imageUrl
     * @return Customer
     *
     */
    public function findOrCreateWithFb(Request $request)
    {
       $customer = null;

        if($request->email !== null) {
            $customer = $this->customer->where('email', $request->email)->first();
        }

        if($customer === null) {
            $imageUrl = $request['picture']['data']['url'] ?? null;
            $customerData = [
                'name' => $request->name,
                'email' => $request->email,
                'status_id' => 1,
                'avatar' => $this->createCustomerAvatar($imageUrl)
            ];
            $customer =  $this->customer->create($customerData);
        }

        return $customer;
    }

    public function findOrCreateWithGoogle(Request $request) {
        $customer = null;

        if($request['profileObj']['email'] !== null) {
            $customer = $this->customer->where('email', $request['profileObj']['email'])->first();
        }

        if($customer === null) {
            $imageUrl = $request['profileObj']['imageUrl'] ?? null;
            $customerData = [
                'name' => $request['profileObj']['name'],
                'email' => $request['profileObj']['email'],
                'status_id' => 1,
                'avatar' => $this->createCustomerAvatar($imageUrl)
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

    /**
     *
     * @param  string|null  $imageUrl
     * @return string|null
     *
     */
    public function createCustomerAvatar($imageUrl)
    {
        if($imageUrl !== null) {
            $contents = file_get_contents($imageUrl);
            $name = basename($imageUrl);
            Storage::put(self::PUBLIC_PATH . $name, $contents);

            return self::FILES_PATH . $name;
        }

        return null;
    }
}
