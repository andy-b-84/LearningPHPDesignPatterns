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
 * @page 172
 */
class Client {
    function __construct() {
        $caption = 'Modigliani painted elongated faces.';
        $mo = new ConcreteClass();
        $mo->templateMethod('modig.png', $caption);
    }
}

$client = new Client();