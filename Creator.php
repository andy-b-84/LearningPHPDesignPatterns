<?php
namespace Lpdp;

/**
 * Class Creator
 * @package Lpdp
 * @chapter 13 The Chain of Responsibility in a MySQL Help Desk
 * @page 290
 */
abstract class Creator {
    /**
     * @var Product
     */
    protected $countryProduct;

    /**
     * @param Product $product
     * @return string
     */
    protected abstract function factoryMethod(Product $product);

    /**
     * @param Product $productNow
     * @return string
     */
    public function feedFactory(Product $productNow) {
        $this->countryProduct = $productNow;
        $mfg = $this->factoryMethod($this->countryProduct);
        return $mfg;
    }
} 