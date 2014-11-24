<?php
namespace Lpdp;

/**
 * Class HelloClone
 * @package Lpdp
 * @chapter 6 Prototype Design Pattern
 * @page 103
 */
class HelloClone {
    /**
     * @var string
     */
    private $builtInConstructor;

    public function __construct() {
        echo 'Hello, clone!<br />';
        $this->builtInConstructor = 'Constructor creation<br />';
    }

    /**
     * @return void
     */
    public function doWork() {
        echo $this->builtInConstructor;
        echo "I'm doing th ework!<br />";
    }
}

$original = new HelloClone();
$original->doWork();

echo '<br />';

$cloneIt = clone $original;
$cloneIt->doWork();