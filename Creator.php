<?php
namespace Lpdp;

/**
 * Class Creator
 * @package Lpdp
 * @ref LPDP page 81
 * @chapter 5: Factory Method Design Pattern
 */
abstract class Creator {
    /**
     * @return Product
     */
    protected abstract function factoryMethod();

    /**
     * @return Product
     */
    public function startFactory() {
        $concreteObject = $this->factoryMethod();
        return $concreteObject;
    }
} 