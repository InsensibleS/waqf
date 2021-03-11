<?php

namespace App\Services;

class EmailService
{
    /**
     *
     * @param $customer
     * @return string
     *
     */
    public function createLink($customer): string
    {
        $customer->registration_string = md5($customer->id);
        $customer->sending_email_with_link = date('Y-m-d H:i:s');
        $customer->save();

        return $customer->registration_string;
    }

    public function getLinkForRegistration($customer)
    {
        $registrationString = self::createLink($customer);

        return \config('custom.frontendUrl') . \config('custom.endpointAccSettings') . $registrationString;
    }

    public function getLinkForPasswordUpdate($customer, $newEmail)
    {
        $registrationString = self::createLink($customer);

        return \config('custom.frontendUrl') . \config('custom.endpointAccSettings') . $registrationString . '?email=' . $newEmail;
    }
}
