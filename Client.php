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
 * @chapter 13 The Chain of Responsibility in a MySQL Help Desk
 * @page 281
 */
class Client
{
    /**
     * @var string
     */
    private $queryNow;

    public function __construct()
    {
        if (isset($_POST['sendNow'])) {
            $this->queryNow = $_POST['help'];
        }
        $q1 = new Q1();
        $q2 = new Q2();
        $q3 = new Q3();
        $q4 = new Q4();
        $q5 = new Q5();

        $q1->setSuccessor($q2);
        $q2->setSuccessor($q3);
        $q3->setSuccessor($q4);
        $q4->setSuccessor($q5);

        $loadup = new Request($this->queryNow);

        $q1->handleRequest($loadup);
    }
}

$client = new Client();