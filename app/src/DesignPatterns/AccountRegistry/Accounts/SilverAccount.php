<?php

namespace App\src\DesignPatterns\AccountRegistry\Accounts;

use App\src\DesignPatterns\AccountRegistry\Account;

class SilverAccount implements Account
{

    public function interestRate()
    {
        return .20;
    }

    public function minimumBalanceDefinition(): int
    {
        return 320;
    }
}
