<?php
namespace Lpdp;

require_once('GraphicFactory.php');
require_once('TextFactory.php');

/**
 * Class Client
 * @package Lpdp
 * @ref LPDP page 86
 * @chapter 5: Factory Method Design Pattern
 */
class Client {
    /**
     * @var Product
     */
    private $graphicObject;
    /**
     * @var Product
     */
    private $textObject;

    public function __construct() {
        $this->textObject = new TextFactory();
        echo $this->textObject->startFactory();
        $this->graphicObject = new GraphicFactory();
        echo $this->graphicObject->startFactory();
    }
}

$client = new Client();