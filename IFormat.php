<?php
namespace Lpdp;

/**
 * Interface IFormat
 * @package Lpdp
 * @chapter 7 The Adapter Pattern Using Composition
 * @page 132
 */
interface IFormat {
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
    public function horizontalLayout();

    /**
     * @return IFormat $this
     */
    public function closeHTML();
}