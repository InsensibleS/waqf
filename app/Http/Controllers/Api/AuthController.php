<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\CustomerService;
use App\Services\HashTagService;
use App\Services\SocialService;
use Illuminate\Http\Request;
use App\Http\Requests\RegFbRequest;
use App\Http\Requests\RegGoogleRequest;
use App\Http\Requests\ProjectRequest;

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
        $socialAccount = $this->socialService->createOrUpdateSocialAccount($request, $customer, $request->userID, 'facebook');

        return response()->json(['message' => 'Success!', 'token' => $this->customerService->createToken($socialAccount->customer)]);
    }

    public function loginWithGoogle(RegGoogleRequest $request)
    {
        if(!$this->socialService->checkGoogleAccount($request)) {
            return response()->json(['error' => 'The user was not verified in Google!']);
        }

        $customer = $this->customerService->findOrCreateWithGoogle($request);
        $socialAccount = $this->socialService->createOrUpdateSocialAccount($request, $customer, $request->googleId, 'google');

        return response()->json(['message' => 'Success!', 'token' => $this->customerService->createToken($socialAccount->customer)]);
    }

    public function logout (Request $request)
    {
        $request->user()->update(['api_token' => null]);

        return response(['message' => 'Success!']);
    }

    public function test (ProjectRequest $request)
    {
        $sdf = new HashTagService();
        return $sdf->findOrCreate($request->hashtags);
//        return explode('#', $request->hashtags);
//        return $request->all();
    }
}
