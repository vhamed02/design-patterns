<?php

namespace App\src\DesignPatterns\Logger\Loggers;

use App\src\DesignPatterns\Logger\Logger;
use App\src\DesignPatterns\Logger\LogMessage;

class DatabaseLogger implements Logger
{

    public function log(LogMessage $logMessage): void
    {
        echo sprintf('Logging "%s" into database..', $logMessage->getContent());
    }
}
