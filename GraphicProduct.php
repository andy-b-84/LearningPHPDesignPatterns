<?php
namespace Lpdp;

require_once('Product.php');

/**
 * Class GraphicProduct
 * @package Lpdp
 * @ref LPDP page 85
 * @chapter 5: Factory Method Design Pattern
 */
class GraphicProduct implements Product {
    /**
     * @var string $this->image
     */
    private $image;

    public function getProperties() {
        $this->image="<!doctype html><html><head><meta charset='UTF-8' />";
        $this->image.="<title>Map Factory</title>";
        $this->image.="</head><body>";
        $this->image.="<img src='http://www.conservapedia.com/images/4/46/Location_of_Mali.PNG' width='500' height='500' />";
        $this->image.="</body></html>";
        return $this->image;
    }
} 