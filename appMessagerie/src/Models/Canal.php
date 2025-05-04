<?php

namespace App\Models;

use App\Models\User;

class Canal
{
    private int $id;
    private User $sender;
    private User $receiver;
    private string $key;
    private bool $archive;


    public function __construct(User $sender, User $receiver, string $key)
    {
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->key = $key;
    }
}