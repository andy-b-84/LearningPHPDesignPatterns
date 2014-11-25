<?php
namespace Lpdp;

/**
 * Class Creator
 * @package Lpdp
 * @chapter 9 Template Method
 * @page 178
 */
abstract class Creator {
    /**
     * @return string
     */
    protected abstract function factoryMethod();

    /**
     * @return string
     */
    public function doFactory() {
        $mfg = $this->factoryMethod();
        return $mfg;
    }
} 