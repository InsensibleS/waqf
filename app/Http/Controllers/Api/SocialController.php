<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function loginWithFb(Request $request) {
        return response()->json(['message' => $request->all()]);
    }

    public function registerWithFb(Request $request) {

        $headers = [
            'Access-Control-Allow-Methods' => '*',
            'Access-Control-Max-Age' => 3600,
            'Access-Control-Allow-Headers' => 'X-Requested-With, Origin, X-Csrftoken, Content-Type, Accept',
        ];
//        return $response->withHeaders($headers);
        return response()->withHeaders($headers)->json(['message' => $request->all()]);
    }
}
