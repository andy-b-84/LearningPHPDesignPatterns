<?php
namespace Lpdp;

require_once('IFormat.php');
require_once('Mobile.php');

/**
 * Class MobileAdapter
 * @package Lpdp
 * @chapter 7 The Adapter Pattern Using Composition
 * @page 137
 */
class MobileAdapter implements IFormat {
    /**
     * @var Mobile
     */
    private $mobile;

    /**
     * @param IMobileFormat $mobileNow
     */
    public function __construct(IMobileFormat $mobileNow) {
        $this->mobile = $mobileNow;
    }

    /**
     * @return IFormat $this
     */
    public function formatCSS() {
        $this->mobile->formatCSS();
        return $this;
    }

    /**
     * @return IFormat $this
     */
    public function formatGraphics() {
        $this->mobile->formatGraphics();
        return $this;
    }

    /**
     * @return IFormat $this
     */
    public function horizontalLayout() {
        $this->mobile->verticalLayout();
        return $this;
    }

    /**
     * @return IFormat $this
     */
    public function closeHTML() {
        $this->mobile->closeHTML();
        return $this;
    }
} 