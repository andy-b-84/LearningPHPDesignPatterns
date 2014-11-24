<?php
namespace Lpdp;

require_once('IAcmePrototype.php');

/**
 * Class Marketing
 * @package Lpdp
 * @chapter 6 Prototype Design Pattern
 * @page 111
 */
class Marketing extends IAcmePrototype {
    /**
     * @var string
     */
    const UNIT='Marketing';
    /**
     * @var string
     */
    private $sales='sales';
    /**
     * @var string
     */
    private $promotion='promotion';
    /**
     * @var string
     */
    private $strategic='strategic planning';

    /**
     * @param string $orgCode
     * @return Marketing $this
     */
    public function setDept($orgCode) {
        switch($orgCode) {
            case 101:
                $this->dept=$this->sales;
                break;
            case 102:
                $this->dept=$this->promotion;
                break;
            case 103:
                $this->dept=$this->strategic;
                break;
            default:
                $this->dept='Unrecognized Marketing';
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