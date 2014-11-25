<?php
namespace Lpdp;

/**
 * Class TextProduct
 * @package Lpdp
 * @chapter 9 Template Method
 * @page 179
 */
class TextProduct implements Product {
    /**
     * @var string
     */
    private $mfgProduct;

    /**
     * @return string
     */
    public function getProperties() {
        $this->mfgProduct = <<<PRODUCT
<div style="color:#cc0000; font-size:12px;font-family:Verdana, Geneva, sans-serif">
    <strong><em>Caption:</em></strong>
    Modigliani painted elongated faces.
</div>
PRODUCT;
        return $this->mfgProduct;
    }
} 