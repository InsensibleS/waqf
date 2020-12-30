<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegApiRequest;
use App\Models\SocialAccount;
use App\Models\Customer;
use Illuminate\Support\Str;

class RegApiController extends Controller
{
  public function google(RegApiRequest $request){

$api_token = Str::random(60);
    $google = SocialAccount::create([
      'customer_id' =>  $user_id,
      'provider' => $request ->input('provider'),
      'provider_id' => $request ->input('provider_id'),
      'token' => $request ->input('token'),

    ]);

    $customer = Customer::create([
      'email' => $request ->input('email');
      'phone' => $request ->input('phone'),
      'api_token' => hash('sha256', $token),
    ])
    return response()->json(['Success', $google], '201');
  }
}
