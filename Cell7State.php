<?php
namespace Lpdp;

/**
 * Class Cell7State
 * @package Lpdp
 * @chapter 10 State
 * @page 213
 */
class Cell7State  extends IMatrix {
    public function goRight() {
        echo '<img src="cells/eight.png"/>';
        $this->context->setState($this->context->getCell8());
    }

    public function goUp() {
        echo '<img src="cells/four.png"/>';
        $this->context->setState($this->context->getCell4());
    }
} 