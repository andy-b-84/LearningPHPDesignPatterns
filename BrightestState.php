<?php
namespace Lpdp;

/**
 * Class BrightestState
 * @package Lpdp
 * @chapter 10 State
 * @page 201
 */
class BrightestState implements IState {
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
        echo '<img src="lights/off.png"/>';
        $this->context->setState($this->context->getBrightestState());
    }

    public function turnLightOn() {
        echo '<img src="lights/nada.png"/>';
    }

    public function turnLightBrighter() {
        echo '<img src="lights/nada.png"/>';
    }

    public function turnLightBrightest() {
        echo '<img src="lights/nada.png"/>';
    }
} 