<?php
namespace Lpdp;

/**
 * Class Male
 * @package Lpdp
 * @chapter 8 Decorators with Multiple Components
 * @page 153
 */
class Male extends IComponent {
    public function __construct() {
        $this->date = 'Male';
        $this->setFeature('<br />Dude programmer features: ');
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