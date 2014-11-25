<?php
namespace Lpdp;

require_once('UniversalConnect.php');

/**
 * Class ConnectClient
 * @package Lpdp
 * @chapter 11 A Universal Class for Connections and a Proxy Pattern for Security
 * @page 224
 */
class ConnectClient {
    private $hookup;

    public function __construct() {
        $this->hookup = UniversalConnect::doConnect();
    }
}

$client = new ConnectClient();