<?php

namespace App\Services;

use App\Models\SocialAccount;
use Illuminate\Http\Request;

class SocialService
{
    protected $socialAccount;

    public function __construct(SocialAccount $socialAccount)
    {
        $this->socialAccount = $socialAccount;
    }

    /**
     *
     * @param string $provider
     * @param string $customerIdByProvider
     * @return SocialAccount|null
     */
    public function checkClientExists(string $provider, string $customerIdByProvider): ?SocialAccount
    {
        return SocialAccount::where([
            ['provider', $provider],
            ['customer_id_by_provider', $customerIdByProvider]
        ])->first();
    }

    /**
     *
     * @param Request $request
     * @param string $customerId
     * @param string $provider
     * @return SocialAccount
     */
    public function createSocialAccount(Request $request, string $customerId, string $provider): SocialAccount
    {
        $socialAccountData = [
            'customer_id_by_provider' => $request->userID,
            'provider' => $provider,
            'token' => $request->accessToken,
            'customer_id' => $customerId
        ];
        return $this->socialAccount->create($socialAccountData);
    }
}
