<?php
namespace Lpdp;

/**
 * Class Female
 * @package Lpdp
 * @chapter 8 Decorators with Multiple Components
 * @page 153
 */
class Female extends IComponent {
    public function __construct() {
        $this->date = 'Female';
        $this->setFeature('<br />Grrrl programmer features: ');
    }

    public function getAge() {
        return $this->ageGroup;
    }

    public function setAge($ageNow) {
        $this->ageGroup = $ageNow;
        return $this;
    }

    /**
     * @return string
     */
    public function getFeature() {
        return $this->feature;
    }

    /**
     * @param string $fea
     * @return IComponent $this
     */
    public function setFeature($fea) {
        $this->feature = $fea;
        return $this;
    }
} 