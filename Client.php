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