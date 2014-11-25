<?php
namespace Lpdp;

/**
 * Class Decorator
 * @package Lpdp
 * @chapter 8 Decorators with Multiple Components
 * @page 155
 */
abstract class Decorator extends IComponent {
    public function setAge($ageNow) {
        $this->ageGroup = $ageNow;
        return $this;
    }

    public function getAge() {
        return $this->ageGroup;
    }
} 