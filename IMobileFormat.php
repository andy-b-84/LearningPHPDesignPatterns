<?php
namespace Lpdp;

/**
 * Interface IMobileFormat
 * @package Lpdp
 * @chapter 7 The Adapter Pattern Using Composition
 * @page 136
 */
interface IMobileFormat {
    /**
     * @return IFormat $this
     */
    public function formatCSS();

    /**
     * @return IFormat $this
     */
    public function formatGraphics();

    /**
     * @return IFormat $this
     */
    public function verticalLayout();

    /**
     * @return IFormat $this
     */
    public function closeHTML();
}