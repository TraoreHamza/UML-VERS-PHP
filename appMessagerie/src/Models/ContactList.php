<?php

namespace App\Models;

use App\Models\User;

class ContactList
{
    private int $id;
    private User $owner;
    private array $contacts;

    public function __construct(User $owner)
    {
        $this->owner = $owner;
    }

    public function addContact(User $contact): void
    {
        $this->contacts[] = $contact;
    }
}