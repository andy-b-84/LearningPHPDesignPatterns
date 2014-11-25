<?php
namespace Lpdp;

require_once('IConnectInfo.php');

/**
 * Class UniversalConnect
 * @package Lpdp
 * @chapter 11 A Universal Class for Connections and a Proxy Pattern for Security
 * @page 222
 */
class UniversalConnect implements IConnectInfo {
    /* This doesn't make sense in my mind : is a static member accessed quicker than a class constant?
     * That should be the only valid argument for such a variable renaming :
     * whenever I define a class constant somewhere, I use that class constant if I need its value, and NOTHING ELSE.
     */
    /**
     * @var string
     */
    private static $server=IConnectInfo::HOST;
    /**
     * @var string
     */
    private static $currentDB=IConnectInfo::DBNAME;
    /**
     * @var string
     */
    private static $user=IConnectInfo::UNAME;
    /**
     * @var string
     */
    private static $pass=IConnectInfo::PW;

    /**
     * @var \mysqli
     */
    private static $hookup;

    /**
     * @return \mysqli
     */
    public static function doConnect() {
        self::$hookup = new \mysqli(self::$server, self::$user, self::$pass, self::$currentDB);
        if (self::$hookup) {
            //echo "Successful connection to MySQL";
        } else if (mysqli_connect_error(self::$hookup)) {
            echo ('Here is why it failed: '.mysqli_connect_error());
        }
        return self::$hookup;
    }
} 