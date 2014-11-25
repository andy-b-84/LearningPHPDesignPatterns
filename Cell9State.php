<?php
namespace Lpdp;

/**
 * Class Cell9State
 * @package Lpdp
 * @chapter 10 State
 * @page 215
 */
class Cell9State  extends IMatrix {
    public function goLeft() {
        echo '<img src="cells/eight.png"/>';
        $this->context->setState($this->context->getCell8());
    }

    public function goUp() {
        echo '<img src="cells/six.png"/>';
        $this->context->setState($this->context->getCell6());
    }
} 