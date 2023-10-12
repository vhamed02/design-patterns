<?php

namespace App\Services;

use App\Models\Account;
use App\Models\User;
use App\src\DesignPatterns\AccountRegistry\AccountCreator;

class AccountService
{
    public function __construct(private AccountCreator $accountCreator)
    {
        //
    }

    public function register(User $user, int $balance): Account
    {
        return $this->accountCreator->registerAccount($user, $balance);
    }
}
