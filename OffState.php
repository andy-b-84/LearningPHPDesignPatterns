<?php
namespace Lpdp;

/**
 * Class OffState
 * @package Lpdp
 * @chapter 10 State
 * @page 196
 */
class OffState implements IState {
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
        echo 'Lights on! Now I can see!<br />';
        $this->context->setState($this->context->getOnState());
    }

    public function turnLightOff() {
        echo 'Light is already off -> take no action<br />';
    }
} 