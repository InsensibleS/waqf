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
        return response()->json(['message' => $request->all()]);
    }
}
