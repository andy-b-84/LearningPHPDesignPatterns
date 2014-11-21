<?php
namespace Lpdp;

require_once('Creator.php');
require_once('Product.php');

/**
 * Class CountryFactory
 * @package Lpdp
 * @ref LPDP page 91
 * @chapter 5: Factory Method Design Pattern
 */
class CountryFactory extends Creator {
    /**
     * @var Product
     */
    private $country;

    /**
     * @param Product $product
     * @return Product
     */
    protected function factoryMethod(Product $product) {
        $this->country = $product;
        return ($this->country->getProperties());
    }
} 