<?php

namespace App\src\DesignPatterns\Logger\LoggerFactories;

use App\src\DesignPatterns\Logger\Logger;
use App\src\DesignPatterns\Logger\Loggers\FileLogger;
use App\src\DesignPatterns\Logger\MessageLogger;

class FileLoggerFactory extends MessageLogger
{

    public function createLogger(): Logger
    {
        return new FileLogger();
    }
}
