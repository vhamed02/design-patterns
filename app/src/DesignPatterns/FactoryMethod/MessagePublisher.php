<?php

namespace App\src\DesignPatterns\FactoryMethod;

abstract class MessagePublisher
{
    public function publish(Message $message)
    {
        $publisher = $this->createPublisher();
        $publisher->publish($message);
    }
    abstract protected function createPublisher(): Publisher;
}
