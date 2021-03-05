<?php


namespace App\Services;

use Illuminate\Http\Request;
use App\Models\CustomerLetter;

class CustomerLetterService
{
    /**
     *
     * @param Request $request
     * @return CustomerLetter
     *
     */
    public function saveCustommerLatter(Request $request)
    {
        return CustomerLetter::create($request->all());
    }
}
