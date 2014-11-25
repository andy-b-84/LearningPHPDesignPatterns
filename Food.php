<?php
namespace Lpdp;

/**
 * Class Food
 * @package Lpdp
 * @chapter 8 Decorators with Multiple Components
 * @page 157
 */
class Food extends Decorator {
    /**
     * @var IComponent
     */
    private $chowNow;
    /**
     * @var array
     */
    private $snacks = array(
        'piz' => 'Pizza',
        'burg' => 'Burgers',
        'nach' => 'Nachos',
        'veg' => 'Veggies',
    );

    /**
     * @param IComponent $dateNow
     */
    public function __construct(IComponent $dateNow) {
        $this->date = $dateNow;
    }

    /**
     * @param string $yum
     * @return IComponent $this
     */
    public function setFeature($yum) {
        $this->chowNow = $this->snacks[$yum];
        return $this;
    }

    /**
     * @return string
     */
    public function getFeature() {
        $output = $this->date->getFeature();
        $fmat = '<br />&nbsp;&nbsp;';
        $output .= "$fmat Favorite food: ";
        $output .= $this->chowNow.'<br />';
        return $output;
    }
} 