<?php
namespace Lpdp;

/**
 * Class Context
 * @package Lpdp
 * @chapter 12 the Flexibility of the Strategy Design Pattern
 * @page 262
 */
class Context {
    /**
     * @var IStrategy
     */
    private $strategy;
    /**
     * @var array
     */
    private $dataPack;

    public function __construct(IStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function algorithm(array $dataPack) {
        $this->dataPack = $dataPack;
        $this->strategy->algorithm($this->dataPack);
    }
} 