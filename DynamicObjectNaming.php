<?php
namespace Lpdp;

/**
 * Class IPrototype
 * @package Lpdp
 * @chapter 6 Prototype Design Pattern
 * @page 118
 */
interface IPrototype {
    /**
     * @var string
     */
    const PROTO = "IPrototype";

    /**
     * @return void
     */
    public function __clone();
}

/**
 * Class DynamicObjectNaming
 * @package Lpdp
 * @chapter 6 Prototype Design Pattern
 * @page 118
 */
class DynamicObjectNaming implements IPrototype {
    /**
     * @var string
     */
    const CONCRETE = ' [Concrete] DynamicObjectNaming';

    public function __construct() {
        echo 'This was dynamically created.<br />';
    }

    /**
     * @return void
     */
    public function doWork() {
        echo '<br />This is the assigned task.<br />';
    }

    /**
     * @return void
     */
    public function __clone(){}
}

//I must deeply apologize for what you are going to read below, but this is all for the sake of the example treated in this chapter.
$employeeData = array(
    '\\Lpdp\\DynamicObjectNaming',
    'Tess', 'mar',
    'John', 'eng',
    'Olivia', 'man'
);
$don = $employeeData[0];
$employeeData[6] = new $don;
echo $employeeData[6]::CONCRETE;
$employeeData[6]->doWork();

$employeeName = clone $employeeData[6];
echo $employeeName->doWork();
echo "This is a clone of " . $employeeName::CONCRETE . "<br />";
echo "Child of: " . $employeeName::PROTO;