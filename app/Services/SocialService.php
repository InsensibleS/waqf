<?php

namespace App\Services;

use App\Models\SocialAccount;
use App\Models\Customer;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Throwable;

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
    public function createSocialAccount($userId, $accessToken, string $customerId, string $provider): SocialAccount
    {
        $socialAccountData = [
            'customer_id_by_provider' => $userId,
            'provider' => $provider,
            'token' => $accessToken,
            'customer_id' => $customerId
        ];
        return $this->socialAccount->create($socialAccountData);
    }

    /**
     *
     * @param Request $request
     * @return bool
     */
    public function checkFbAccount(Request $request): bool
    {
        try {
            $user = Socialite::driver('facebook')->userFromToken($request->accessToken);
            if ($user->id === $request->userID) {
                return true;
            }
        } catch (Throwable $exception) {
            return false;
        }

        return false;
    }

    /**
     *
     * @param Request $request
     * @return bool
     */
    public function checkGoogleAccount(Request $request): bool
    {
        try {
            $user = Socialite::driver('google')->userFromToken($request->accessToken);
            if ($user->id === $request->googleId) {
                return true;
            }
        } catch (Throwable $exception) {
            return false;
        }

        return false;
    }

    /**
     *
     * @param Request $request
     * @param Customer $customer
     * @param SocialAccount $socialAccount
     * @return SocialAccount
     */
    public function createOrUpdateSocialAccount(Request $request, Customer $customer, $userId, $provider): SocialAccount
    {
        $socialAccount = $this->checkClientExists($provider, $userId);
        if ($socialAccount === null) {
            $socialAccount = $this->createSocialAccount($userId, $request->accessToken, $customer->id, $provider);
        } else {
            $socialAccount->token = $request->accessToken;
            $socialAccount->save();
        }

        return $socialAccount;
    }
}
