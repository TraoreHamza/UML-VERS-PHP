<?php

namespace App\Models;

class Notification
{
    private int $id;
    private string $content;
    private \DateTime $date;
    private bool $status;

    public function __construct(\DateTime $date)
    {
        $this->date = $date;
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