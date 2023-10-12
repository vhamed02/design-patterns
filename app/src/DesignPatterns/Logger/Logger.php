<?php

namespace App\src\DesignPatterns\Logger;

interface Logger
{
    public function log(LogMessage $logMessage): void;
}
