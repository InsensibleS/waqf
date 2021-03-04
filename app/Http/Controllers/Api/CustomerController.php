<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function changePassword(ChangePasswordRequest $request)
    {
        $request->user()->fill([
            'password' => Hash::make($request->password)
        ])->save();

        return response()->json(['message' => 'Password changed successfully.']);
    }
}
