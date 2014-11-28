<?php
namespace Lpdp;

/**
 * Interface Product
 * @package Lpdp
 * @chapter 13 The Chain of Responsibility in a MySQL Help Desk
 */
interface Product {
    /**
     * @return string
     */
    public function getProperties();
} 