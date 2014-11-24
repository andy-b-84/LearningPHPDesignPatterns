<?php
namespace Lpdp;

/**
 * Class EuroCalc
 * @package Lpdp
 * @chapter 7 The Adapter Pattern Using Inheritance
 * @page 129
 */
interface ITarget {
    /**
     * @return float
     */
    public function requester();
} 