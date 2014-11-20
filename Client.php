#!/usr/bin/php
<?php
namespace Lpdp;

require_once('GraphicFactory.php');
require_once('TextFactory.php');

/**
 * Class Client
 * @package Lpdp
 * @ref LPDP page 84
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
        $this->graphicObject = new GraphicFactory();
        echo $this->graphicObject->startFactory() . PHP_EOL;
        $this->textObject = new TextFactory();
        echo $this->textObject->startFactory() . PHP_EOL;
    }
}

$client = new Client();