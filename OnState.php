<?php
namespace Lpdp;

/**
 * Class OnState
 * @package Lpdp
 * @chapter 10 State
 * @page 200
 */
class OnState implements IState {
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
        echo '<img src="lights/brighter.png"/>';
        $this->context->setState($this->context->getBrighterState());
    }

    public function turnLightBrightest() {
        echo '<img src="lights/nada.png"/>';
    }
} 