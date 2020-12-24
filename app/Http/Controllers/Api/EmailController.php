<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SendLinkToRegistrationRequest;
use App\Services\CustomerService;

class EmailController extends Controller
{
    protected $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function sendLinkToCompleteRegistration(SendLinkToRegistrationRequest $request)
    {
        $newCustomer = $this->customerService->store($request);

        return response()->json(['message' => $newCustomer]);
    }
}
