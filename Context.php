<?php
namespace Lpdp;

/**
 * Class Context
 * @package Lpdp
 * @chapter 12 the Flexibility of the Strategy Design Pattern
 * @page 247
 */
class Context {
    /**
     * @var IStrategy
     */
    private $strategy;

    public function __construct(IStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function algorithm() {
        $this->strategy->algorithm();
    }
} 