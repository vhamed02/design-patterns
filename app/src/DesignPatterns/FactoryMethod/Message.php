<?php

namespace App\src\DesignPatterns\FactoryMethod;

class Message
{
    public function __construct(private $title, private $image, private $content)
    {
        //
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

}
