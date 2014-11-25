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
     * @var BrighterState
     */
    private $brighterState;
    /**
     * @var BrightestState
     */
    private $brightestState;
    /**
     * @var IState
     */
    private $currentState;

    public function __construct() {
        $this->offState = new OffState($this);
        $this->onState = new OnState($this);
        $this->brighterState = new BrighterState($this);
        $this->brightestState = new BrightestState($this);

        $this->currentState = $this->offState;
    }

    public function turnOffLight() {
        $this->currentState->turnLightOff();
    }

    public function turnOnLight() {
        $this->currentState->turnLightOn();
    }

    public function turnBrighterLight() {
        $this->currentState->turnLightBrighter();
    }

    public function turnBrightestLight() {
        $this->currentState->turnLightBrightest();
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
     * @return OffState
     */
    public function getOffState() {
        return $this->offState;
    }

    /**
     * @return OnState
     */
    public function getOnState() {
        return $this->onState;
    }

    /**
     * @return BrighterState
     */
    public function getBrighterState() {
        return $this->brighterState;
    }

    /**
     * @return BrightestState
     */
    public function getBrightestState() {
        return $this->brightestState;
    }
}