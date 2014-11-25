<?php
namespace Lpdp;

/**
 * Class GraphicProduct
 * @package Lpdp
 * @chapter 9 Template Method
 * @page 179
 */
class GraphicProduct implements Product {
    /**
     * @var string
     */
    private $mfgProduct;

    /**
     * @return string
     */
    public function getProperties() {
        $this->mfgProduct = '<img src="pix/modig.png" />';
        return $this->mfgProduct;
    }
} 