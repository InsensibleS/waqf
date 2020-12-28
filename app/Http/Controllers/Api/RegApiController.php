<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegApiRequest;
use App\Models\SocialAccount;

class RegApiController extends Controller
{
  public function google(RegApiRequest $request){

$id = 1;
$user_id = 1;
    $google = SocialAccount::create([
      'user_id' =>  $user_id,
      'provider' => $request ->input('provider'),
      'provider_id' => $request ->input('provider_id'),
      'token' => $request ->input('token'),
    ]);

    return response()->json(['Success', $google], '201');
  }
}
