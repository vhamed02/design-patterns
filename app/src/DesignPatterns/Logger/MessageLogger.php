<?php

namespace App\src\DesignPatterns\Logger;

abstract class MessageLogger
{
    public function log(LogMessage $logMessage)
    {
        $logger = $this->createLogger();
        $logger->log($logMessage);
    }

    abstract public function createLogger(): Logger;
}
