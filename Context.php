<?php
namespace Lpdp;

/**
 * Class Context
 * @package Lpdp
 * @chapter 10 State
 * @page 193
 */
class Context {
    /**
     * @var OffState
     */
    private $offState;
    /**
     * @var OnState
     */
    private $onState;
    /**
     * @var IState
     */
    private $currentState;

    public function __construct() {
        $this->offState = new OffState($this);
        $this->onState = new OnState($this);

        $this->currentState = $this->offState;
    }

    public function turnOnLight() {
        $this->currentState->turnLightOn();
    }

    public function turnOffLight() {
        $this->currentState->turnLightOff();
    }

    /**
     * @param IState $state
     * @return Context $this
     */
    public function setState(IState $state) {
        $this->currentState = $state;
        return $this;
    }

    /**
     * @return OnState
     */
    public function getOnState() {
        return $this->onState;
    }

    /**
     * @return OffState
     */
    public function getOffState() {
        return $this->offState;
    }
}