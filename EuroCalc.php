<?php
namespace Lpdp;

/**
 * Class EuroCalc
 * @package Lpdp
 * @chapter 7 The Adapter Pattern Using Inheritance
 * @page 128
 */
class EuroCalc {
    /**
     * @var float
     */
    private $euro;
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
        $this->euro = $this->product+$this->service;
        return $this->requestTotal();
    }

    /**
     * @return float
     */
    public function requestTotal() {
        $this->euro *= $this->rate;
        return $this->euro;
    }
} 