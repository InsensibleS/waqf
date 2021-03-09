<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Services\CustomerService;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ChangeProfileDataRequest;

class CustomerController extends Controller
{
    protected $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        $request->user()->fill([
            'password' => Hash::make($request->password)
        ])->save();

        return response()->json(['message' => 'Password changed successfully.']);
    }

    public function changeProfileData(ChangeProfileDataRequest $request)
    {
        $this->customerService->changeProfileData($request);

        return response()->json(['message' => 'Profile data changed successfully.']);
    }
}
