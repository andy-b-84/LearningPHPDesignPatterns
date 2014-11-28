<?php
namespace Lpdp;

/**
 * Class Handler
 * @package Lpdp
 * @chapter 13 The Chain of Responsibility in a MySQL Help Desk
 * @page 283
 */
abstract class Handler {
    /**
     * @var HungerFactory
     */
    protected $hungerFactory;
    /**
     * @var Handler
     */
    protected $successor;
    /**
     * @var int
     */
    protected $monthNow;
    /**
     * @var int
     */
    protected $dayNow;
    /**
     * @var string
     */
    protected $handleNow;

    public function __construct() {
        $this->hungerFactory = new HungerFactory();
    }

    /**
     * @param Handler $nextService
     */
    public function setSuccessor(Handler $nextService) {
        $this->successor = $nextService;
    }

    /**
     * @param Request $request
     */
    abstract public function handleRequest(Request $request);
} 