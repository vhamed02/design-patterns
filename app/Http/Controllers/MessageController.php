<?php

namespace App\Http\Controllers;

use App\src\DesignPatterns\FactoryMethod\Message;
use App\src\DesignPatterns\FactoryMethod\MessagePublisher;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    private $publisherFactory;

    public function __construct(private MessagePublisher $publisher)
    {
        //
    }

    public function publishMessage(Request $request)
    {
        $this->publisher->publish(
            new Message(
                'The weather is cloudy Today!',
                'cloudy-weather.jpg',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
            )
        );
    }
}
