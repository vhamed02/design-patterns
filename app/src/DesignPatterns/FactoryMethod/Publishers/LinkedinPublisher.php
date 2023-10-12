<?php

namespace App\src\DesignPatterns\FactoryMethod\Publishers;

use App\src\DesignPatterns\FactoryMethod\Message;
use App\src\DesignPatterns\FactoryMethod\Publisher;

class LinkedinPublisher implements Publisher
{

    public function publish(Message $message)
    {
        echo sprintf(
            '<strong>[LinkedinPublisher]: </strong> %s / %s / %s',
            $message->getTitle(),
            $message->getContent(),
            $message->getImage()
        );
    }
}
