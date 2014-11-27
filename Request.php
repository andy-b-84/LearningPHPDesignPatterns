<?php
namespace Lpdp;

/**
 * Class Request
 * @package Lpdp
 * @chapter 13 The Chain of Responsibility in a MySQL Help Desk
 * @page 282
 */
class Request {
    /**
     * @var string
     */
    private $value;

    /**
     * @param string $service
     */
    public function __construct($service) {
        $this->value = $service;
    }

    /**
     * @return string
     */
    public function getService() {
        return $this->value;
    }
} 