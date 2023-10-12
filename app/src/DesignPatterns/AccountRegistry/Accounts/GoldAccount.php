<?php

namespace App\src\DesignPatterns\AccountRegistry\Accounts;

use App\src\DesignPatterns\AccountRegistry\Account;

class GoldAccount implements Account
{

    public function interestRate()
    {
        return .32;
    }

    public function minimumBalanceDefinition(): int
    {
        return 500;
    }
}
