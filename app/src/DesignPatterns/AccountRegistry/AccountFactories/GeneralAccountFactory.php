<?php

namespace App\src\DesignPatterns\AccountRegistry\AccountFactories;

use App\src\DesignPatterns\AccountRegistry\Account;
use App\src\DesignPatterns\AccountRegistry\AccountCreator;
use App\src\DesignPatterns\AccountRegistry\Accounts\GeneralAccount;
use App\src\DesignPatterns\AccountRegistry\Accounts\GoldAccount;

class GeneralAccountFactory extends AccountCreator
{
    protected function getAccount(): Account
    {
        return new GeneralAccount();
    }
}
