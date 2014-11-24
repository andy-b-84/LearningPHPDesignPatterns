<?php
namespace Lpdp;

require_once('EuroAdapter.php');
require_once('DollarCalc.php');

/**
 * Class Client
 * @package Lpdp
 * @chapter 7 The Adapter Pattern Using Inheritance
 * @page 130
 */
class Client {
    /**
     * @var EuroAdapter
     */
    private $requestNow;
    /**
     * @var DollarCalc
     */
    private $dollarRequest;

    public function __construct() {
        $this->requestNow = new EuroAdapter();
        $this->dollarRequest = new DollarCalc();
        $euro = '&#8364;';
        echo "Euros: $euro" . $this->makeAdapterRequest($this->requestNow) . '<br />';
        echo "Dollars: $" . $this->makeDollarRequest($this->dollarRequest) . '<br />';
    }

    /**
     * I feel bad about this example :
     * shouldn't we have a DollarCalc instance, then have only one "makeRequest" method, or have the ITarget interface declare the "requestCalc" method?
     * using PHPStorm's type hinting, "request"+Ctrl^Space wrote "requester" for me, as the only method in the ITarget interface is "requester"
     * @param ITarget $req
     * @return float
     */
    private function makeAdapterRequest(ITarget $req) {
        return $req->requestCalc(40,50);
    }

    /**
     * @param DollarCalc $req
     * @return float
     */
    private function makeDollarRequest(DollarCalc $req) {
        return $req->requestCalc(40,50);
    }
}

$client = new Client();