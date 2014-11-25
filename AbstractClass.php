<?php
namespace Lpdp;

/**
 * Class AbstractClass
 * @package Lpdp
 * @chapter 9 Template Method
 * @page 171
 */
abstract class AbstractClass {
    /**
     * @var string
     */
    protected $pix;
    /**
     * @var string
     */
    protected $cap;

    /**
     * @param string $pixNow
     * @param string $capNow
     * @return void
     */
    public function templateMethod($pixNow, $capNow) {
        $this->pix = $pixNow;
        $this->cap = $capNow;
        $this->addPix($this->pix);
        $this->addCaption($this->cap);
    }

    /**
     * @param string $pix
     * @return void
     */
    abstract protected function addPix($pix);

    /**
     * @param string $cap
     * @return void
     */
    abstract protected function addCaption($cap);
}