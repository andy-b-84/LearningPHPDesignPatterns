<?php
namespace Lpdp;

require_once('Creator.php');
require_once('GraphicProduct.php');

/**
 * Class GraphicFactory
 * @package Lpdp
 * @ref LPDP page 82
 * @chapter 5: Factory Method Design Pattern
 */
class GraphicFactory extends Creator {
    /**
     * @return GraphicProduct
     */
    protected function factoryMethod() {
        $product = new GraphicProduct();
        return($product->getProperties());
    }
} 