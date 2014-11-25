<?php
namespace Lpdp;

/**
 * Class Cell2State
 * @package Lpdp
 * @chapter 10 State
 * @page 210
 */
class Cell2State  extends IMatrix {
    public function goRight() {
        echo '<img src="cells/three.png"/>';
        $this->context->setState($this->context->getCell3());
    }

    public function goLeft() {
        echo '<img src="cells/one.png"/>';
        $this->context->setState($this->context->getCell1());
    }

    public function goDown() {
        echo '<img src="cells/five.png"/>';
        $this->context->setState($this->context->getCell5());
    }
} 