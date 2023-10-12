<?php

namespace App\src\DesignPatterns\FactoryMethod\PublisherFactories;

use App\src\DesignPatterns\FactoryMethod\MessagePublisher;
use App\src\DesignPatterns\FactoryMethod\Publisher;
use App\src\DesignPatterns\FactoryMethod\Publishers\LinkedinPublisher;

class LinkedInPublisherFactory extends MessagePublisher
{
    protected function createPublisher(): Publisher
    {
        return new LinkedinPublisher();
    }
}
