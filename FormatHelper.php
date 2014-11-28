<?php
namespace Lpdp;

/**
 * Class FormatHelper
 * @package Lpdp
 * @chapter 13 The Chain of Responsibility in a MySQL Help Desk
 * @page 293
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
        $this->topper = '<!DOCTYPE html><html>
<head>
    <link rel="stylesheet" type="text/css" href="product.css" />
    <meta charset="UTF-8" />
    <title>Map Factory</title>
</head>
<body>
    <header>Hunger Country</header>';
        return $this->topper;
    }

    /**
     * @return string
     */
    public function closeUp() {
        $this->bottom = '<br /><a href="Answer.html" target="_blank">Click for Credit</a>';
        $this->bottom = '</body></html>';
        return $this->bottom;
    }
} 