<?php
namespace Lpdp;

/**
 * Class Cell4State
 * @package Lpdp
 * @chapter 10 State
 * @page 211
 */
class Cell4State  extends IMatrix {
    public function goRight() {
        echo '<img src="cells/five.png"/>';
        $this->context->setState($this->context->getCell5());
    }

    public function goUp() {
        echo '<img src="cells/one.png"/>';
        $this->context->setState($this->context->getCell1());
    }

    public function goDown() {
        echo '<img src="cells/seven.png"/>';
        $this->context->setState($this->context->getCell7());
    }
} 