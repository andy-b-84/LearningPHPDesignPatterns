<?php
namespace Lpdp;

/**
 * Class Creator
 * @package Lpdp
 * @ref LPDP page 91
 * @chapter 5: Factory Method Design Pattern
 */
abstract class Creator {
    /**
     * @param Product $product
     * @return Product
     */
    protected abstract function factoryMethod(Product $product);

    /**
     * @return mixed
     */
    public function startFactory($productNow) {
        $mfg = $this->factoryMethod($productNow);
        return $mfg;
    }
} 