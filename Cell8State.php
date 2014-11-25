<?php
namespace Lpdp;

/**
 * Class Cell8State
 * @package Lpdp
 * @chapter 10 State
 * @page 214
 */
class Cell8State  extends IMatrix {
    public function goRight() {
        echo '<img src="cells/nine.png"/>';
        $this->context->setState($this->context->getCell9());
    }

    public function goLeft() {
        echo '<img src="cells/seven.png"/>';
        $this->context->setState($this->context->getCell7());
    }

    public function goUp() {
        echo '<img src="cells/five.png"/>';
        $this->context->setState($this->context->getCell5());
    }
} 