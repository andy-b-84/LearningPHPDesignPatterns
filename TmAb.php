<?php
namespace Lpdp;

/**
 * Class TmAb
 * @package Lpdp
 * @chapter 9 Template Method
 * @page 177
 */
abstract class TmAb {
    /**
     * @var string
     */
    protected $pix;
    /**
     * @var string
     */
    protected $cap;

    /**
     * @return void
     */
    public function templateMethod() {
        $this->addPix();
        $this->addCaption();
    }

    /**
     * @return void
     */
    protected abstract function addPix();

    /**
     * @return void
     */
    protected abstract function addCaption();
} 