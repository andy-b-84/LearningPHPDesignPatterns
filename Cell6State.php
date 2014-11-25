<?php
namespace Lpdp;

/**
 * Class Cell6State
 * @package Lpdp
 * @chapter 10 State
 * @page 212
 */
class Cell6State  extends IMatrix {
    public function goLeft() {
        echo '<img src="cells/five.png"/>';
        $this->context->setState($this->context->getCell5());
    }

    public function goUp() {
        echo '<img src="cells/three.png"/>';
        $this->context->setState($this->context->getCell3());
    }

    public function goDown() {
        echo '<img src="cells/nine.png"/>';
        $this->context->setState($this->context->getCell9());
    }
} 