<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\EmailService;
use Illuminate\Http\Request;
use App\Http\Requests\SendLinkToRegistrationRequest;
use App\Http\Requests\ValidateLinkRequest;
use App\Services\CustomerService;
use \App\Mail\LinkShipped;
use Illuminate\Support\Facades\Mail;
use Throwable;

class EmailController extends Controller
{
    protected $customerService;
    protected $emailService;

    public function __construct(CustomerService $customerService, EmailService $emailService)
    {
        $this->customerService = $customerService;
        $this->emailService = $emailService;
    }

    /**
     *
     * @param  SendLinkToRegistrationRequest  $request
     * @return string
     *
     */
    public function sendLinkToCompleteRegistration(SendLinkToRegistrationRequest $request)
    {
        try {
            $customer = $this->customerService->checkClientExists($request);
            $customer = $customer === null ? $this->customerService->store($request) : $customer;
            $link = $this->emailService->createLink($customer);
            Mail::to($customer->email)->send(new LinkShipped($customer, $link));
            $response = $link;
            $message = 'email sent successfully';
        } catch (Throwable $exception) {
            $response = null;
            $message = 'there was an error sending the letter';
            report($exception);
        }

        return response()->json(['message' => $message, 'response' => $response]);
    }

    /**
     *
     * @param  ValidateLinkRequest  $request
     * @return string
     *
     */
    public function validationLinkToCompleteRegistration(ValidateLinkRequest $request)
    {
        $customer = $this->customerService->findByRegistrationString($request);
        $this->customerService->registerCustomer($customer);
        $customerToken = $this->customerService->createToken($customer);

        return response()->json(['message' => 'Customer registered.', 'token' => $customerToken]);
    }
}
