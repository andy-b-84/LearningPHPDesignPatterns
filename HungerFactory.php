<?php
namespace Lpdp;

/**
 * Class HungerFactory
 * @package Lpdp
 * @chapter 13 The Chain of Responsibility in a MySQL Help Desk
 * @page 290
 */
class HungerFactory extends Creator {
    /**
     * @var Product
     */
    private $country;

    /**
     * @param Product $product
     * @return string
     */
    protected function factoryMethod(Product $product) {
        $this->country = $product;
        return $this->country->getProperties();
    }
} 