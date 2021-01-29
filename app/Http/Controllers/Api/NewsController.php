<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class NewsController extends Controller
{
    public function getNews($link) {
        return response()->json([Str::random(20)]);
    }
}
