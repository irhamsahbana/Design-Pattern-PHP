<?php

namespace Workspace\DesignPatterns\Behavioral\State\AccountManagement;

class InvoicedState extends AccountStates implements AccountStateInterface
{
    public function close()
    {
        return new ClosedState();
    }

    public function getName() : string
    {
        return 'invoiced';
    }
}