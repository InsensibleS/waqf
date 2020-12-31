<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\CustomerService;
use App\Services\SocialService;
use Illuminate\Http\Request;
use App\Http\Requests\RegFbRequest;

class AuthController extends Controller
{
    protected $customerService;
    protected $socialService;

    public function __construct(SocialService $socialService, CustomerService $customerService)
    {
        $this->customerService = $customerService;
        $this->socialService = $socialService;
    }

    public function loginWithFb(RegFbRequest $request)
    {
        $socialAccount = $this->socialService->checkClientExists('facebook', $request->userID);
        $customer = $this->customerService->findOrCreate($request);
        if($socialAccount === null) {
            $socialAccount = $this->socialService->createSocialAccount($request, $customer->id, 'facebook');
        }
        $customerToken = $this->customerService->createToken($socialAccount->customer);

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
