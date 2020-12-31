<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\CustomerService;
use App\Services\SocialService;
use Illuminate\Http\Request;
use App\Http\Requests\RegApiRequest;

class AuthController extends Controller
{
    protected $customerService;
    protected $socialService;

    public function __construct(SocialService $socialService, CustomerService $customerService)
    {
        $this->customerService = $customerService;
        $this->socialService = $socialService;
    }

    public function loginWithFb(RegApiRequest $request)
    {
        $socialAccount = $this->socialService->checkClientExists('facebook', $request->userId);
        if($socialAccount === null || $socialAccount->customer === null) {
            return response()->json(['message' => "Customer not found"], 401);
        }
        $customerToken = $this->customerService->createToken($socialAccount->customer);

        return response()->json(['message' => 'Success!', 'token' => $customerToken]);
    }

    public function registerWithFb(RegApiRequest $request)
    {
        $socialAccount = $this->socialService->checkClientExists('facebook', $request->userId);
        if($socialAccount !== null) {
            return response()->json(['message' => 'This social account is already registered']);
        }
        $customer = $this->customerService->findOrCreate($request);
        $customerToken = $this->customerService->createToken($customer);
        $socialAccount = $this->socialService->createSocialAccount($request, $customer->id, 'facebook');

        return response()->json(['message' => 'Success!', 'token' => $customerToken]);
    }

    public function logout (Request $request)
    {
        $request->user()->update(['api_token' => null]);

        return response(['message' => 'Success!']);
    }

    public function test() {
        dd('hello');
    }
}
