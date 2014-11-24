<?php
namespace Lpdp;

/**
 * Class CloneMe
 * @package Lpdp
 * @chapter 6 Prototype Design Pattern
 * @page 101
 */
abstract class CloneMe {
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $picture;

    /**
     * @return void
     * @see http://fr2.php.net/manual/fr/language.oop5.cloning.php
     */
    abstract public function __clone();
}

class Person extends CloneMe {
    public function __construct() {
        $this->picture = 'cloneMan.png';
        $this->name = 'Original';
    }

    /**
     * @return void
     */
    public function display() {
        echo '<img src="'.$this->picture.'" height="82px" width="42px" />';
        echo '<br />'.$this->name.'</p>';
    }

    /**
     * @return void
     */
    public function __clone() {}
}

$worker = new Person();
$worker->display();

echo '<br />';

$slacker = clone $worker;
$slacker->name='Cloned';
$slacker->display();