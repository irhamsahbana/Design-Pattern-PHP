<?php

namespace Workspace\DesignPatterns\Behavioral\State\AccountManagement;

class Account
{
    /**
     * @var AccountStateInterface
     */
    private $state;

    public function __construct()
    {
        $this->state = new RegisteredState();
    }


    public function getState() : AccountStateInterface
    {
        return $this->state;
    }

    public function setState(AccountStateInterface $state)
    {
        $this->state = $state;
    }

    public function isOpen() : bool
    {
        return $this->state instanceof OpenState;
    }

    public function isClosed() : bool
    {
        return $this->state instanceof ClosedState;
    }

    /**
     * @throws \Exception
     */
    public function moveToPending()
    {
        $this->setState($this->getState()->pending());
    }

    /**
     * @throws \Exception
     */
    public function moveToOpen()
    {
        $this->setState($this->getState()->open());
    }

    /**
     * @throws \Exception
     */
    public function moveToInvoiced()
    {
        $this->setState($this->getState()->invoice());
    }

    /**
     * @throws \Exception
     */
    public function moveToClosed()
    {
        $this->setState($this->getState()->close());
    }
}