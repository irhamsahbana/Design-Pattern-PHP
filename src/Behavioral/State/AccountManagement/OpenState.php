<?php

namespace Workspace\DesignPatterns\Behavioral\State\AccountManagement;

class OpenState extends AccountStates implements AccountStateInterface
{
    public function invoive()
    {
        return new InvoiceState();
    }

    public function close()
    {
        return new ClosedState();
    }

    public function getName() : string
    {
        return 'open';
    }
}