<?php
namespace Lpdp;

require_once('IAcmePrototype.php');

/**
 * Class Engineering
 * @package Lpdp
 * @chapter 6 Prototype Design Pattern
 * @page 112
 */
class Engineering extends IAcmePrototype {
    /**
     * @var string
     */
    const UNIT='Engineering';
    /**
     * @var string
     */
    private $development='programming';
    /**
     * @var string
     */
    private $design='digital artwork';
    /**
     * @var string
     */
    private $sysAd='system administration';

    /**
     * @param string $orgCode
     * @return Engineering $this
     */
    public function setDept($orgCode) {
        switch($orgCode) {
            case 301:
                $this->dept=$this->development;
                break;
            case 302:
                $this->dept=$this->design;
                break;
            case 303:
                $this->dept=$this->sysAd;
                break;
            default:
                $this->dept='Unrecognized Engineering';
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