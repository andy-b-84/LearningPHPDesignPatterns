<?php
namespace Lpdp;

require_once ('Product.php');

/**
 * Class TextProduct
 * @package Lpdp
 * @ref LPDP page 83
 * @chapter 5: Factory Method Design Pattern
 */
class TextProduct implements Product {
    /**
     * @var string $this->text
     */
    private $text;

    public function getProperties() {
        $this->text = 'This is text';
        return $this->text;
    }
} 