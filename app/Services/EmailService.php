<?php

namespace App\Services;

use App\Models\Customer;

class EmailService
{
    private $domain = 'https://waqf.softlex.pro/';
    private $endpointConfirmationRegistration = 'acc-settings/';

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
