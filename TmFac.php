<?php
namespace Lpdp;

/**
 * Class TmFac
 * @package Lpdp
 * @chapter 9 Template Method
 * @page 177
 */
class TmFac extends TmAb {
    /**
     * @return void
     */
    protected function addPix() {
        $this->pix = new GraphicFactory();
        echo $this->pix->doFactory();
    }

    /**
     * @return void
     */
    protected function addCaption() {
        $this->cap = new TextFactory();
        echo $this->cap->doFactory();
    }
} 