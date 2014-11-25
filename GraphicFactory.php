<?php
namespace Lpdp;

/**
 * Class GraphicFactory
 * @package Lpdp
 * @chapter 9 Template Method
 * @page 178
 */
class GraphicFactory extends Creator {
    protected function factoryMethod() {
        $product = new GraphicProduct();
        return $product->getProperties();
    }
} 