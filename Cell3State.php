<?php
namespace Lpdp;

/**
 * Class Cell3State
 * @package Lpdp
 * @chapter 10 State
 * @page 210
 */
class Cell3State  extends IMatrix {
    public function goLeft() {
        echo '<img src="cells/two.png"/>';
        $this->context->setState($this->context->getCell2());
    }

    public function goDown() {
        echo '<img src="cells/six.png"/>';
        $this->context->setState($this->context->getCell6());
    }
} 