<?php
namespace Lpdp;

/**
 * Class ConcreteClass
 * @package Lpdp
 * @chapter 9 Template Method
 * @page 172
 */
class ConcreteClass extends AbstractClass {
    /**
     * @param string $pix
     */
    protected function addPix($pix) {
        $this->pix = $pix;
        $this->pix = 'pix/'.$this->pix;
        $formatter = '<img src="'.$this->pix.'" /><br />';
        echo $formatter;
    }

    /**
     * @param string $cap
     */
    protected function addCaption($cap) {
        $this->cap = $cap;
        echo '<em>Caption:</em>'.$this->cap.'<br />';
    }
} 