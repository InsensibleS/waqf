<?php

namespace App\Services;

use App\Models\SocialAccount;
use App\Http\Requests\RegApiRequest;
class SocialAccountService
{


    /**
     *
     * @param  SocialAccount  $socialAccount
     * @return string
     *
     */
     public function createCustomer(RegApiRequest $request){
     $api_token = Str::random(60);
     $customer = Customer::create([
       'provider' => $request -> input('graphDomain'),
       'provider_id' => $request > input('id'),
     ]);
   }
}
