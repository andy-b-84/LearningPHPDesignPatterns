<?php
namespace Lpdp;

function __autoload($className) {
    $classNameWithoutNamespace = substr($className, 5);
    require_once("$classNameWithoutNamespace.php");
}
spl_autoload_register('\\Lpdp\\__autoload');

/**
 * Class Client
 * @package Lpdp
 * @chapter 10 State
 * @page 197
 */
class Client {
    /**
     * @var Context
     */
    private $context;

    public function __construct() {
        $this->context = new Context();
        $this->context->turnOnLight();
        $this->context->turnOnLight();
        $this->context->turnOffLight();
        $this->context->turnOffLight();
    }
}

$client = new Client();