<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegApiRequest;

class RegApiController extends Controller
{

  public function google(RegApiRequest $request){

    $google = SocialAccount::create($request->all());

    return response()->json(['Success', $google], '201');
  }

}
