<?php

namespace App\Models;

use App\Models\User;

class Message
{
    private int $id;
    private string $content;
    private \DateTime $date; // Non nullable
    private User $sender; // Non nullable

    public function __construct(
        \DateTime $date,
        User $sender
    ) {
        $this->date = $date;
        $this->sender = $sender;
    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }
}