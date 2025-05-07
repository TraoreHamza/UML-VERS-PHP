<?php

namespace App\Models;

use App\Models\Message;

class File
{
    private int $id;
    private string $name;
    private Message $message;
    private string $url;

    public function __construct(string $name, Message $message, string $url)
    {
        $this->name = $name;
        $this->message = $message;
        $this->url = $url;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

}