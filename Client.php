<?php
namespace Lpdp;

/**
 * Class Client
 * @package Lpdp
 * @chapter 13 The Chain of Responsibility in a MySQL Help Desk
 * @page 286
 */
class Client
{
    /**
     * @var string
     */
    private $queryNow;

    public function __construct()
    {
        $this->queryNow = getdate();
        $d1 = new D1();
        $d2 = new D2();
        $d3 = new D3();
        $d4 = new D4();
        $d5 = new D5();
        $d6 = new D6();
        $d7 = new D7();
        $d8 = new D8();
        $d9 = new D9();
        $d10 = new D10();
        $d11 = new D11();
        $d12 = new D12();
        $d13 = new D13();
        $d14 = new D14();
        $d15 = new D15();

        $d1->setSuccessor($d2);
        $d2->setSuccessor($d3);
        $d3->setSuccessor($d4);
        $d4->setSuccessor($d5);
        $d5->setSuccessor($d6);
        $d6->setSuccessor($d7);
        $d7->setSuccessor($d8);
        $d8->setSuccessor($d9);
        $d9->setSuccessor($d10);
        $d10->setSuccessor($d11);
        $d11->setSuccessor($d12);
        $d12->setSuccessor($d13);
        $d13->setSuccessor($d14);
        $d14->setSuccessor($d15);

        $loadup = new Request($this->queryNow);
        $d1->handleRequest($loadup);
    }
}