<?php
namespace Lpdp;

/**
 * Class Cell5State
 * @package Lpdp
 * @chapter 10 State
 * @page 212
 */
class Cell5State  extends IMatrix {
    public function goRight() {
        echo '<img src="cells/six.png"/>';
        $this->context->setState($this->context->getCell6());
    }

    public function goLeft() {
        echo '<img src="cells/four.png"/>';
        $this->context->setState($this->context->getCell4());
    }

    public function goUp() {
        echo '<img src="cells/two.png"/>';
        $this->context->setState($this->context->getCell2());
    }

    public function goDown() {
        echo '<img src="cells/eight.png"/>';
        $this->context->setState($this->context->getCell8());
    }
} 