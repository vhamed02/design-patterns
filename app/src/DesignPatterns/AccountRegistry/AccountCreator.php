<?php

namespace App\src\DesignPatterns\AccountRegistry;

use App\Models\User;

abstract class AccountCreator
{
    public function registerAccount(User $user, int $balance)
    {
        $account = $this->getAccount();
        if($balance < $account->minimumBalanceDefinition()) {
            throw new \Exception('Not enough balance to create this account!');
        }
        $account = new \App\Models\Account([
            'interest_rate' => $account->interestRate(),
        ]);
        $account->save();
        return $account;
    }
    abstract protected function getAccount(): Account;
}
