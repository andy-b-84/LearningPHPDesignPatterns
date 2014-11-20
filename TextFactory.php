<?php
namespace Lpdp;

require_once('Creator.php');
require_once('TextProduct.php');

/**
 * Class TextFactory
 * @package Lpdp
 * @ref LPDP page 82
 * @chapter 5: Factory Method Design Pattern
 */
class TextFactory extends Creator {
    /**
     * @return TextProduct
     */
    protected function factoryMethod() {
        $product = new TextProduct();
        return($product->getProperties());
    }
} 