<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\CustomerService;
use App\Services\SocialService;
use Illuminate\Http\Request;
use App\Http\Requests\RegFbRequest;
use App\Http\Requests\RegGoogleRequest;
use Laravel\Socialite\Facades\Socialite;

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
        } else {
            $socialAccount->token = $request->accessToken;
            $socialAccount->save();
        }
        $customerToken = $this->customerService->createToken($socialAccount->customer);

        return response()->json(['message' => 'Success!', 'token' => $customerToken]);
    }

    public function loginWithGoogle(RegGoogleRequest $request)
    {
//        $socialAccount = $this->socialService->checkClientExists('facebook', $request->userID);
//        $customer = $this->customerService->findOrCreate($request);
//        if($socialAccount === null) {
//            $socialAccount = $this->socialService->createSocialAccount($request, $customer->id, 'facebook');
//        }
//        $customerToken = $this->customerService->createToken($socialAccount->customer);
//
//        return response()->json(['message' => 'Success!', 'token' => $customerToken]);
    }

    public function logout (Request $request)
    {
        $request->user()->update(['api_token' => null]);

        return response(['message' => 'Success!']);
    }

    public function test() {
        $user = Socialite::driver('facebook')->userFromToken('EAAGahwERhJQBAONJvTs7rQb56juGjxiiYddfZAM6eCkc9CTOkYwdqMA9Gf7uTckcx53yHTYmAYvPSK3g2Wkq76wehwf8NqsIKIilN1ZC8lEAVBiZAth5QYrpAuWacHxJjQf7KRqBV4nkgxh2wX3N4iQ0DnYtBQOwNwkQtkDUje9ONyIIZCRCpofgqaxzq3wRp9peiY3lumjaUEYLvP5SgXLontjvUHcZD');
        dd($user);
    }
}
