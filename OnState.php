<?php
namespace Lpdp;

/**
 * Class OnState
 * @package Lpdp
 * @chapter 10 State
 * @page 196
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

    public function turnLightOn() {
        echo 'Light is already on -> take no action<br />';
    }

    public function turnLightOff() {
        echo 'Lights off!<br />';
        $this->context->setState($this->context->getOffState());
    }
} 