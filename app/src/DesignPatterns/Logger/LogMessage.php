<?php

namespace App\src\DesignPatterns\Logger;

class LogMessage
{
    public function __construct(private string $content)
    {
        //
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
}
