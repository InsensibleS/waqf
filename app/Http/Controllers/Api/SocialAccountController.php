<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegFbRequest;
use App\Http\Requests\RegGoogleRequest;
use App\Models\SocialAccount;
use App\Services\SocialService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SocialAccountController extends Controller
{
    protected $socialService;

    public function __construct(SocialService $socialService)
    {
        $this->socialService = $socialService;
    }

    public function attachFb(RegFbRequest $request)
    {
        Validator::make($request->all(), [
            'userID' => [
                function ($attribute, $value, $fail) {
                    if (SocialAccount::where([
                        ['provider', 'facebook'],
                        ['customer_id_by_provider', $value],
                    ])->first()) {
                        $fail('This userID already exists.');
                    }
                },
                function ($attribute, $value, $fail) {
                    if (Auth::user()->profileFb) {
                        $fail('This customer already has an FB account.');
                    }
                },
            ]
        ])->validate();

        if(!$this->socialService->checkFbAccount($request)) {
            return response()->json(['error' => 'The user was not verified in FB!']);
        }
        $this->socialService->createOrUpdateSocialAccount($request, Auth::user(), $request->userID, 'facebook');

        return response()->json(['message' => 'FB account successfully attached.']);
    }

    public function attachGoogle(RegGoogleRequest $request)
    {
        Validator::make($request->all(), [
            'googleId' => [
                function ($attribute, $value, $fail) {
                    if (SocialAccount::where([
                        ['provider', 'google'],
                        ['customer_id_by_provider', $value],
                    ])->first()) {
                        $fail('This googleId already exists.');
                    }
                },
                function ($attribute, $value, $fail) {
                    if (Auth::user()->profileGoogle) {
                        $fail('This customer already has an google account.');
                    }
                },
            ]
        ])->validate();

        if(!$this->socialService->checkGoogleAccount($request)) {
            return response()->json(['error' => 'The user was not verified in Google!']);
        }
        $this->socialService->createOrUpdateSocialAccount($request, Auth::user(), $request->googleId, 'google');

        return response()->json(['message' => 'Google account successfully attached.']);
    }

    public function detachFb()
    {
        $socialAccount = Auth::user()->profileFb;
        if(!$socialAccount) {
            return response()->json(['error' => 'FB account not found.']);
        }
        $socialAccount->delete();

        return response()->json(['message' => 'FB account successfully detached.']);
    }

    public function detachGoogle()
    {
        $socialAccount = Auth::user()->profileGoogle;
        if(!$socialAccount) {
            return response()->json(['error' => 'Google account not found.']);
        }
        $socialAccount->delete();

        return response()->json(['message' => 'Google account successfully detached.']);
    }
}
