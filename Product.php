<?php
namespace Lpdp;

/**
 * interface Product
 * @package Lpdp
 * @ref LPDP page 83
 * @chapter 5: Factory Method Design Pattern
 */
interface Product {
    /**
     * @return mixed
     */
    public function getProperties();
} 