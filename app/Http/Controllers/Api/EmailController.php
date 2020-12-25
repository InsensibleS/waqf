<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SendLinkToRegistrationRequest;
use App\Services\CustomerService;
use \App\Mail\LinkShipped;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    protected $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function sendLinkToCompleteRegistration(SendLinkToRegistrationRequest $request)
    {
//        $newCustomer = $this->customerService->store($request);

//        return Mail::render('emails.send_link', [
//            'sender' => (object)['name' => 'test', 'email' => 'test@gmail.com', 'message' => 'Test message', 'subject' => 'Test subject']
//        ]);

        Mail::to('vadim.ustinovich@softlex.pro')->send(new LinkShipped());
//        dd('sdafsdaf');

        return response()->json(['message' => '$newCustomer']);
    }
}
