<?php
namespace Lpdp;

require_once('UniversalConnect.php');

/**
 * Class HashRegister
 * @package Lpdp
 * @chapter 11 A Universal Class for Connections and a Proxy Pattern for Security
 * @page 226
 */
class HashRegister {
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
        $uname = $this->hookup->real_escape_string($_POST['uname']);
        $pw = $this->hookup->real_escape_string($_POST['pw']);

        $sql = "INSERT INTO $this->tableMaster (uname, pw) VALUES ('$uname', md5('$pw'));";

        if ($this->hookup->query($sql)) {
            echo 'Registration completed';
        } elseif (false === ($result = $this->hookup->query($sql))) {
            printf ('Invalid query: %s<br />Whole query: %s<br />', $this->hookup->error, $sql );
            exit();
        }
        $this->hookup->close();
    }
}

$hashRegister = new HashRegister();