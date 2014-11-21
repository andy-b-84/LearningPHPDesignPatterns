<?php
namespace Lpdp;

/**
 * Class FormatHelper
 * @package Lpdp
 * @ref LPDP page 94
 * @chapter 5: Factory Method Design Pattern
 */
class FormatHelper {
    /**
     * @var string
     */
    private $topper;
    /**
     * @var string
     */
    private $bottom;

    /**
     * @return string
     */
    public function addTop() {
        $this->topper="<!doctype html><html><head>
            <link rel='stylesheet' type='text/css' href='product.css'/>
            <meta charset='UTF-8'>
            <title>Map Factory</title>
            </head>
            <body>";
        return $this->topper;
    }

    /**
     * @return string
     */
    public function closeUp() {
        $this->bottom = "</body></html>";
        return $this->bottom;
    }
} 