<?php

namespace App\Models;

use App\Models\User;

class Group
{
    private int $id;
    private string $name;
    private User $admin;
    private bool $private;

    public function __construct(string $name, User $admin)
    {
        $this->name = $name;
        $this->admin = $admin;
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