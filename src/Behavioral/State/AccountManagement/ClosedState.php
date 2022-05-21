<?php

namespace Workspace\DesignPatterns\Behavioral\State\AccountManagement;

class ClosedState extends AccountStates implements AccountStateInterface
{
    public function pending()
    {
        return new PendingState();
    }

    public function getName() : string
    {
        return 'closed';
    }
}