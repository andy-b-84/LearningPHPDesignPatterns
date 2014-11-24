<?php
namespace Lpdp;

require_once('IAcmePrototype.php');

/**
 * Class Management
 * @package Lpdp
 * @chapter 6 Prototype Design Pattern
 * @page 112
 */
class Management extends IAcmePrototype {
    /**
     * @var string
     */
    const UNIT='Management';
    /**
     * @var string
     */
    private $research='research';
    /**
     * @var string
     */
    private $plan='planning';
    /**
     * @var string
     */
    private $operations='operations';

    /**
     * @param string $orgCode
     * @return Management $this
     */
    public function setDept($orgCode) {
        switch($orgCode) {
            case 201:
                $this->dept=$this->research;
                break;
            case 202:
                $this->dept=$this->plan;
                break;
            case 203:
                $this->dept=$this->operations;
                break;
            default:
                $this->dept='Unrecognized Management';
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getDept() {
        return $this->dept;
    }

    /**
     * @return void
     */
    public function __clone(){}

    /**
     * @return string
     */
    public function getUnit() {
        return self::UNIT;
    }
}