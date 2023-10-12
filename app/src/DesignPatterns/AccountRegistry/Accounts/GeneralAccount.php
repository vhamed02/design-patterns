<?php

namespace App\src\DesignPatterns\AccountRegistry\Accounts;

use App\src\DesignPatterns\AccountRegistry\Account;

class GeneralAccount implements Account
{

    public function interestRate()
    {
        return .10;
    }

    public function minimumBalanceDefinition(): int
    {
        return 100;
    }
}
