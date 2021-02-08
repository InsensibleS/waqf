<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCommentToNewsRequest;

class NewsCommentController extends Controller
{
    public function addCommentToNews(CreateCommentToNewsRequest $request)
    {
        return 'hello';
    }
}
