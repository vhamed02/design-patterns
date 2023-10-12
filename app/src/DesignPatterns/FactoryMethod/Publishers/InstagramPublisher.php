<?php

namespace App\src\DesignPatterns\FactoryMethod\Publishers;

use App\src\DesignPatterns\FactoryMethod\Message;
use App\src\DesignPatterns\FactoryMethod\Publisher;

class InstagramPublisher implements Publisher
{

    public function publish(Message $message)
    {
        echo sprintf(
            '<strong>[InstagramPublisher]: </strong> %s / %s / %s',
            $message->getTitle(),
            $message->getContent(),
            $message->getImage()
        );
    }
}
