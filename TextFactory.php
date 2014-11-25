<?php
namespace Lpdp;

/**
 * Class TextFactory
 * @package Lpdp
 * @chapter 9 Template Method
 * @page 179
 */
class TextFactory extends Creator {
    protected function factoryMethod() {
        $product = new TextProduct();
        return $product->getProperties();
    }
} 