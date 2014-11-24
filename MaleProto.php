<?php
namespace Lpdp;

require_once('IPrototype.php');

/**
 * Class MaleProto
 * @package Lpdp
 * @chapter 6 Prototype Design Pattern
 * @page 105
 */
class MaleProto extends IPrototype {
    /**
     * @var string
     */
    const GENDER='MALE';

    /**
     * @var boolean
     */
    public $mated;

    public function __construct() {
        $this->eyeColor='red';
        $this->wingBeat=220;
        $this->unitEyes=760;
    }

    /**
     * @return void
     */
    public function __clone(){}

    /**
     * @return string
     */
    public function getGender() {
        return self::GENDER;
    }

    /**
     * @return bool
     */
    public function isMale() {
        return true;
    }
} 