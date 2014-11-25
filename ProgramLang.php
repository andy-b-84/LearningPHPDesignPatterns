<?php
namespace Lpdp;

/**
 * Class ProgramLang
 * @package Lpdp
 * @chapter 8 Decorators with Multiple Components
 * @page 155
 */
class ProgramLang extends Decorator {
    /**
     * @var IComponent
     */
    private $languageNow;
    /**
     * @var array
     */
    private $language = array(
        'php' => 'PHP',
        'cs' => 'C#',
        'js' => 'JavaScript',
        'as3' => 'ActionScript 3.0',
    );

    /**
     * @param IComponent $dateNow
     */
    public function __construct(IComponent $dateNow) {
        $this->date = $dateNow;
    }

    /**
     * @param string $lan
     * @return IComponent $this
     */
    public function setFeature($lan) {
        $this->languageNow = $this->language[$lan];
        return $this;
    }

    /**
     * @return string
     */
    public function getFeature() {
        $output = $this->date->getFeature();
        $fmat = '<br />&nbsp;&nbsp;';
        $output .= "$fmat Preferred programming language: ";
        $output .= $this->languageNow;
        return $output;
    }
} 