<?php
namespace Lpdp;

require_once('CountryFactory.php');
require_once('MoldovaProduct.php');

/**
 * Class Client
 * @package Lpdp
 * @ref LPDP page 94
 * @chapter 5: Factory Method Design Pattern
 */
class Client {
    /**
     * @var CountryFactory
     */
    private $countryFactory;

    public function __construct() {
        $this->countryFactory = new CountryFactory();
        echo $this->countryFactory->startFactory(new MoldovaProduct());
    }
}

$client = new Client();