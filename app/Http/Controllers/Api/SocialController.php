<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SocialAccountService;
use Illuminate\Http\RegApiRequest;

class SocialController extends Controller
{
    public function loginWithFb(Request $request) {
        return response()->json(['message' => $request->all()]);
    }

    public function loginWithGoogle(RegApiRequest $request) {


    public function registerWithFb(Request $request) {

        return response()->json(['message' => 'Customer created']);

        return response()->json(['message' => $request->all()]);
    }

    public function registerWithGoogle(RegApiRequest $request) {
      try {
          $customer = $this->customerService->checkClientExists($request);
          $customer = $customer === null ? $this->customerService->store($request) : $customer;
          $message = 'email sent successfully';
      } catch (Throwable $exception) {
          $response = null;
          $message = 'there was an error sending the letter';
          report($exception);
      }
      return response()->json(['message' => $message, 'response' => $response]);
      }
    }
}
