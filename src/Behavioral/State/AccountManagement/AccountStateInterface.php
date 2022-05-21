<?php

namespace Workspace\DesignPatterns\Behavioral\State\AccountManagement;

interface AccountStateInterface
{
    public function register();
    public function pending();
    public function open();
    public function invoice();
    public function close();

    public function getName() : string;
}