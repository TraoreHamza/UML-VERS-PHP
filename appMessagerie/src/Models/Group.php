<?php

namespace App\Models;

use App\Models\User;

class Group
{
    private int $id;
    private string $name;
    private User $admin;
    private bool $private = true; // Default value is false

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

    /**
     * Get the value of private
     */
    public function isPrivate()
    {
        return $this->private;
    }
    /**
     * Set the value of private
     *
     * @return  self
     */
    public function setPrivate($private)
    {
        $this->private = $private;

        return $this;
    }
}