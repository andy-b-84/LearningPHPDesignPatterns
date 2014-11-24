<?php
namespace Lpdp;

require_once('Product.php');
require_once('FormatHelper.php');

/**
 * Class MoldovaProduct
 * @package Lpdp
 * @ref LPDP page 97
 * @chapter 5: Factory Method Design Pattern
 */
class MoldovaProduct implements Product {
    /**
     * @var string $this->mfgProduct
     */
    private $mfgProduct;
    /**
     * @var FormatHelper $this->formatHelper
     */
    private $formatHelper;
    /**
     * @var string $this->countryNow
     */
    private $countryNow;

    public function getProperties()
    {
        $this->countryNow = file_get_contents('CountryWriteups/Moldova.txt');

        $this->formatHelper = new FormatHelper();
        $this->mfgProduct = $this->formatHelper->addTop();
        $this->mfgProduct .= '<img src="Countries/Moldova.png" class="pixRight" width="315" height="391" />';
        $this->mfgProduct .= '<header>Moldova</header>';
        $this->mfgProduct .= '<p>'.$this->countryNow.'</p>';
        $this->mfgProduct .= $this->formatHelper->closeUp();
        return $this->mfgProduct;
    }
} 