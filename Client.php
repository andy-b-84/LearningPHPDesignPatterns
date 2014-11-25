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
 * @chapter 10 State
 * @page 216
 */
class Client {
    /**
     * @var Context
     */
    private $context;

    public function __construct() {
        $this->context = new Context();
        $this->context->doUp();
        $this->context->doRight();
        $this->context->doDown();
        echo '<br />';
        $this->context->doDown();
        $this->context->doLeft();
        $this->context->doUp();
    }
}

$client = new Client();