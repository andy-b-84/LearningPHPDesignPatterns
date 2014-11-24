<?php
namespace Lpdp;

require_once('EuroCalc.php');
require_once('ITarget.php');

/**
 * Class EuroAdapter
 * @package Lpdp
 * @chapter 7 The Adapter Pattern Using Inheritance
 * @page 129
 */
class EuroAdapter extends EuroCalc implements ITarget {
    public function __construct() {
        $this->requester();
    }

    /**
     * @return float
     */
    public function requester() {
        $this->rate = 0.8111;
        return $this->rate;
    }
} 