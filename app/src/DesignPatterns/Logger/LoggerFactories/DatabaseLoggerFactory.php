<?php

namespace App\src\DesignPatterns\Logger\LoggerFactories;

use App\src\DesignPatterns\Logger\Logger;
use App\src\DesignPatterns\Logger\Loggers\DatabaseLogger;
use App\src\DesignPatterns\Logger\MessageLogger;

class DatabaseLoggerFactory extends MessageLogger
{
    public function createLogger(): Logger
    {
        return new DatabaseLogger();
    }
}
