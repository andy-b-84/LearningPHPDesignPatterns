<?php
namespace Lpdp;

require_once('ISubject.php');
require_once('RealSubject.php');
require_once('UniversalConnect.php');

/**
 * Class Proxy
 * @package Lpdp
 * @chapter 11 A Universal Class for Connections and a Proxy Pattern for Security
 * @page 233
 */
class Proxy implements ISubject {
    /**
     * @var string
     */
    private $tableMaster;
    /**
     * @var \mysqli
     */
    private $hookup;
    /**
     * @var boolean
     */
    private $logGood;
    /**
     * @var RealSubject
     */
    private $realSubject;

    /**
     * @param string $uNow
     * @param string $pNow
     */
    public function login($uNow, $pNow) {
        $uname = $uNow;
        $pw = md5($pNow);
        $this->logGood = false;

        $this->tableMaster = 'proxyLog';
        $this->hookup = UniversalConnect::doConnect();

        $sql = "SELECT pw FROM $this->tableMaster WHERE uname='$uname';";
        $result = $this->hookup->query($sql);

        if ($result) {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            $this->logGood = ($row['pw'] == $pw);
            $result->close();
        } else if (false === $result) {
            printf('Failed: %s<br />', $this->hookup->error);
            exit();
        }
        $this->hookup->close();

        if ($this->logGood) {
            $this->request();
        } else {
            echo 'Username and/or Password not on record.';
        }
    }

    /**
     * @return mixed
     */
    public function request() {
        $this->realSubject = new RealSubject();
        $this->realSubject->request();
    }
} 