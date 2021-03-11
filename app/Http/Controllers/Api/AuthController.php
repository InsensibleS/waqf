<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\CustomerService;
use App\Services\SocialService;
use Illuminate\Http\Request;
use App\Http\Requests\RegFbRequest;
use App\Http\Requests\RegGoogleRequest;
use App\Http\Resources\CustomerResource;

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
        if(!$this->socialService->checkFbAccount($request)) {
            return response()->json(['error' => 'The user was not verified in FB!']);
        }
        $customer = $this->customerService->findOrCreateWithFb($request);
        if(!$customer->is_active) {
            return response()->json(['error' => 'Customer blocked.'], 401);
        }
        $this->socialService->createOrUpdateSocialAccount($request, $customer, $request->userID, 'facebook');
        $customerData = new CustomerResource($customer);

        return response()->json([
            'message' => 'Success!',
            'token' => $customer->createToken('token for ' . $customer->id)->plainTextToken,
            'customer' => $customerData,
            'login_with' => 'facebook'
        ]);
    }

    public function loginWithGoogle(RegGoogleRequest $request)
    {
        if(!$this->socialService->checkGoogleAccount($request)) {
            return response()->json(['error' => 'The user was not verified in Google!']);
        }

        $customer = $this->customerService->findOrCreateWithGoogle($request);
        if(!$customer->is_active) {
            return response()->json(['error' => 'Customer blocked.'], 401);
        }
        $this->socialService->createOrUpdateSocialAccount($request, $customer, $request->googleId, 'google');
        $customerData = new CustomerResource($customer);

        return response()->json([
            'message' => 'Success!',
            'token' => $customer->createToken('token for ' . $customer->id)->plainTextToken,
            'customer' => $customerData,
            'login_with' => 'google'
        ]);
    }

    public function logout (Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response(['message' => 'Success!']);
    }
}
