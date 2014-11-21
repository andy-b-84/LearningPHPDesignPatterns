<?php
namespace Lpdp;

require_once('Product.php');

/**
 * Class GraphicProduct
 * @package Lpdp
 * @ref LPDP page 89
 * @chapter 5: Factory Method Design Pattern
 */
class GraphicProduct implements Product {
    /**
     * @var string $this->image
     */
    private $image;

    public function getProperties() {
        $this->image="<img src='http://www.conservapedia.com/images/4/46/Location_of_Mali.PNG' width='362' height='371' style='padding: 10px 10px 10px 0;' align='left'/>";
        return $this->image;
    }
} 