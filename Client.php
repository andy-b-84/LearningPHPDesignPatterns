<?php
namespace Lpdp;

require_once('Proxy.php');

/**
 * Class Client
 * @package Lpdp
 * @chapter 11 A Universal Class for Connections and a Proxy Pattern for Security
 * @page 232
 */
class Client {
    /**
     * @var Proxy
     */
    private $proxy;
    /**
     * @var string
     */
    private $uname;
    /**
     * @var string
     */
    private $pw;
    /**
     * @var string
     */
    private $tableMaster;
    /**
     * @var \mysqli
     */
    private $hookup;

    public function __construct() {
        $this->tableMaster = 'proxyLog';
        $this->hookup = UniversalConnect::doConnect();
        $this->uname = $this->hookup->real_escape_string(trim($_POST['uname']));
        $this->pw = $this->hookup->real_escape_string(trim($_POST['pw']));
        $this->getIface($this->proxy = new Proxy());
    }

    /**
     * @param ISubject $proxy
     */
    private function getIface(ISubject $proxy) {
        $proxy->login($this->uname, $this->pw);
    }
}

$client = new Client();