<?php

namespace Workspace\DesignPatterns\Behavioral\State\AccountManagement;

class PendingState extends AccountStates implements AccountStateInterface
{
    public function open()
    {
        return new OpenState();
    }

    public function getName() : string
    {
        return 'pending';
    }
}