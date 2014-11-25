<?php
namespace Lpdp;

/**
 * Class Cell1State
 * @package Lpdp
 * @chapter 10 State
 * @page 209
 */
class Cell1State extends IMatrix {
    public function goRight() {
        echo '<img src="cells/two.png"/>';
        $this->context->setState($this->context->getCell2());
    }

    public function goDown() {
        echo '<img src="cells/four.png"/>';
        $this->context->setState($this->context->getCell4());
    }
} 