<?php
namespace Lpdp;

/**
 * Class C15
 * @package Lpdp
 * @chapter 13 The Chain of Responsibility in a MySQL Help Desk
 * @page 291
 */
class C15 implements Product {
    /**
     * @var string
     */
    private $mfgProduct;
    /**
     * @var FormatHelper
     */
    private $formatHelper;
    /**
     * @var string
     */
    private $countryNow;

    /**
     * @return string
     */
    public function getProperties() {
        $this->countryNow = file_get_contents('hunger/c15/clue.txt');

        $this->formatHelper = new FormatHelper();
        $this->mfgProduct = $this->formatHelper->addTop();
        $this->mfgProduct .= '<img src="hunger/c15/map.gif" width="300" height="322" />';
        $this->mfgProduct .= '<img class="pixLeft" src="hunger/c15/pic.jpg" width="200" height="400" />';
        $this->mfgProduct .= "<p>$this->countryNow</p>";
        $this->mfgProduct .= $this->formatHelper->closeUp();

        return $this->mfgProduct;
    }
} 