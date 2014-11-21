<?php
namespace Lpdp;

require_once('Product.php');
require_once('FormatHelper.php');

/**
 * Class KyrgyztanProduct
 * @package Lpdp
 * @ref LPDP page 92
 * @chapter 5: Factory Method Design Pattern
 */
class KyrgyztanProduct implements Product {
    /**
     * @var string $this->mfgProduct
     */
    private $mfgProduct;
    /**
     * @var FormatHelper $this->formatHelper
     */
    private $formatHelper;

    public function getProperties()
    {
        $this->formatHelper=new FormatHelper();
        $this->mfgProduct=$this->formatHelper->addTop();
        $this->mfgProduct.=<<<KYRGYZSTAN
<img src='http://upload.wikimedia.org/wikipedia/commons/c/ce/Kyrgyzstan.png' class='pixRight' width='633'
height='321'>
<header>Kyrgyzstan</header>
<p>A Central Asian country of incredible natural beauty and proud
nomadic traditions, most of Kyrgyzstan was formally annexed to
Russia in 1876. The Kyrgyz staged a major revolt against the
Tsarist Empire in 1916 in which almost one-sixth of the Kyrgyz
population was killed. Kyrgyzstan became a Soviet republic in 1936 etc...
</p>
KYRGYZSTAN;
        $this->mfgProduct .= $this->formatHelper->closeUp();
        return $this->mfgProduct;
    }
} 