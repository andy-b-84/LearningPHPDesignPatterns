<?php
namespace Lpdp;

/**
 * @param string $className
 */
function __autoload($className) {
    $classNameWithoutNamespace = substr($className, 5);
    require_once("$classNameWithoutNamespace.php");
}
spl_autoload_register('\\Lpdp\\__autoload');

/**
 * Class Client
 * @package Lpdp
 * @chapter 9 Template Method
 * @page 176
 */
class Client {
    function __construct() {
        $mo = new TmFac();
        $mo->templateMethod();
    }
}

$client = new Client();