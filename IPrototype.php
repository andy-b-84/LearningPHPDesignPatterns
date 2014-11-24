<?php
namespace Lpdp;

/**
 * Class IPrototype
 * @package Lpdp
 * @chapter 6 Prototype Design Pattern
 * @page 104
 */
abstract class IPrototype {
    /**
     * @var string
     */
    public $eyeColor;
    /**
     * @var numeric
     */
    public $wingBeat;
    /**
     * @var int
     */
    public $unitEyes;

    /**
     * @return void
     * @see http://fr2.php.net/manual/fr/language.oop5.cloning.php
     */
    abstract public function __clone();

    /**
     * @return string
     */
    abstract public function getGender();

    /**
     * @return bool
     */
    public function isMale() {
        return false;
    }

    /**
     * @return bool
     */
    public function isFemale() {
        return false;
    }
}