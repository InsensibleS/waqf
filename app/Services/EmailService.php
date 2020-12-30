<?php

namespace App\Services;

use App\Models\Customer;

class EmailService
{
    private $domain = 'https://waqf.com/';
    private $endpointConfirmationRegistration = 'confirmation-of-registration/';

    /**
     *
     * @param  Customer  $customer
     * @return string
     *
     */
    public function createLink(Customer $customer): string
    {
        $customer->registration_string = md5($customer->id);
        $customer->sending_email_with_link = date('Y-m-d H:i:s');
        $customer->save();

        return $this->domain . $this->endpointConfirmationRegistration . $customer->registration_string;
    }
}
