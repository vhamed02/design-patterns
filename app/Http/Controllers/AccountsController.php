<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\AccountService;
use App\src\DesignPatterns\AccountRegistry\AccountFactories\GeneralAccountFactory;
use App\src\DesignPatterns\AccountRegistry\AccountFactories\GoldAccountFactory;
use App\src\DesignPatterns\AccountRegistry\AccountFactories\SilverAccountFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountsController extends Controller
{

    public function register(Request $request)
    {
        $service = $this->accountService($request->get('type'));
        $service->register(User::get(auth()->id()), $request->get('balance'));
    }

    private function accountService(string $accountType)
    {
        $accountFactory = match ($accountType) {
            'gold' => new GoldAccountFactory(),
            'silver' => new SilverAccountFactory(),
            default => new GeneralAccountFactory(),
        };
        return new AccountService($accountFactory);
    }
}
