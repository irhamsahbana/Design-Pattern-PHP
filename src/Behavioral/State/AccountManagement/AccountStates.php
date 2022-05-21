<?php

namespace Workspace\DesignPatterns\Behavioral\State\AccountManagement;

class AccountStates
{
    public function register()
    {
        throw new \Exception("can't register");
    }

    public function pending()
    {
        throw new \Exception("can't put account into pending");
    }

    public function open()
    {
        throw new \Exception("can't open account");
    }

    public function invoice()
    {
        throw new \Exception("can't send invoice");
    }

    public function close()
    {
        throw new \Exception("can't close account");
    }
}