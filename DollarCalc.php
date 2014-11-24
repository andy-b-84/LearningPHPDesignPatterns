<?php
namespace Lpdp;

/**
 * Class DollarCalc
 * @package Lpdp
 * @chapter 7 The Adapter Pattern Using Inheritance
 * @page 127
 */
class DollarCalc {
    /**
     * @var float
     */
    private $dollar;
    /**
     * @var float Product's price
     */
    private $product;
    /**
     * @var float Service's price
     */
    private $service;
    /**
     * @var float
     * @exemple 0.75 means "25% off"
     */
    public $rate=1;

    /**
     * @param float $productNow
     * @param float $serviceNow
     * @return float
     */
    public function requestCalc($productNow, $serviceNow) {
        $this->product = $productNow;
        $this->service = $serviceNow;
        $this->dollar = $this->product+$this->service;
        return $this->requestTotal();
    }

    /**
     * @return float
     */
    public function requestTotal() {
        $this->dollar *= $this->rate;
        return $this->dollar;
    }
} 