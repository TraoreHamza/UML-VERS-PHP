<?php

namespace App\Models;

class User
{
    private int $id;
    private string $number;
    private string $country;
    private string $photo;

    public function __construct(string $number, string $country)
    {
        $this->number = $number;
        $this->country = $country;
    }
}