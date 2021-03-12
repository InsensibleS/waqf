<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmailSandingFromTheAboutPageRequest;
use App\Http\Requests\ValidateLinkToEmailChangeRequest;
use App\Http\Resources\CustomerResource;
use App\Mail\AddressingTheTeam;
use App\Services\CustomerLetterService;
use App\Services\EmailService;
use App\Http\Requests\SendLinkToRegistrationRequest;
use App\Http\Requests\ValidateLinkRequest;
use App\Services\CustomerService;
use \App\Mail\LinkShipped;
use \App\Mail\LinkShippedChangePassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Throwable;

class EmailController extends Controller
{
    protected $customerService;
    protected $emailService;
    protected $customerLetterService;

    public function __construct(CustomerService $customerService, EmailService $emailService, CustomerLetterService $customerLetterService)
    {
        $this->customerService = $customerService;
        $this->emailService = $emailService;
        $this->customerLetterService = $customerLetterService;
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
            $link = $this->emailService->getLinkForRegistration($customer);
            Mail::to($customer->email)->send(new LinkShipped($link));
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
     * @param  SendLinkToRegistrationRequest  $request
     * @return string
     *
     */
    public function sendLinkToChangeEmail(SendLinkToRegistrationRequest $request)
    {
        try {
            $customer = Auth::user();
            $link = $this->emailService->getLinkForEmailUpdate($customer, $request->email);

            Mail::to($request->email)->send(new LinkShippedChangePassword($link));
            $response = $link;
            $message = 'email sent successfully';
        } catch (Throwable $exception) {
            $response = $exception;
            $message = 'There was an error sending the letter. Check the correctness of the entered email';
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

        return response()->json([
            'message' => 'Customer registered.',
            'token' => $customer->createToken('token for ' . $customer->id)->plainTextToken,
            'customer' => new CustomerResource($customer)
        ]);
    }

    public function sendingAnEmailMessage(EmailSandingFromTheAboutPageRequest $request)
    {
        Mail::to(config('mail.from.address'))->send(new AddressingTheTeam($request));
        $this->customerLetterService->saveCustommerLetter($request);

        return response()->json(['message' => 'Message sent successfully!']);
    }

    /**
     *
     * @param  ValidateLinkToEmailChangeRequest  $request
     * @return string
     *
     */
    public function validationLinkToCompleteEmailChange(ValidateLinkToEmailChangeRequest $request)
    {
        $customer = $this->customerService->findByRegistrationString($request);
        $this->customerService->changeEmail($customer, $request);

        return response()->json([
            'message' => 'Email changed successfully!',
            'token' => $customer->createToken('token for ' . $customer->id)->plainTextToken,
            'customer' => new CustomerResource($customer)
        ]);
    }
}
