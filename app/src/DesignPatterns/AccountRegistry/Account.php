<?php

namespace App\src\DesignPatterns\AccountRegistry;

interface Account
{
    public function interestRate();

    public function minimumBalanceDefinition(): int;
}
