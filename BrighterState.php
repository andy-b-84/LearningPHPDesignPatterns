<?php
namespace Lpdp;

/**
 * Class BrighterState
 * @package Lpdp
 * @chapter 10 State
 * @page 201
 */
class BrighterState implements IState {
    /**
     * @var Context
     */
    private $context;

    /**
     * @param Context $context
     */
    public function __construct(Context $context) {
        $this->context = $context;
    }

    public function turnLightOff() {
        echo '<img src="lights/nada.png"/>';
    }

    public function turnLightOn() {
        echo '<img src="lights/nada.png"/>';
    }

    public function turnLightBrighter() {
        echo '<img src="lights/nada.png"/>';
    }

    public function turnLightBrightest() {
        echo '<img src="lights/brightest.png"/>';
        $this->context->setState($this->context->getBrightestState());
    }
} 