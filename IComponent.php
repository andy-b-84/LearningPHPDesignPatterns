<?php
namespace Lpdp;

/**
 * Class IComponent
 * @package Lpdp
 * @chapter 8 Decorators with Multiple Components
 * @page 153
 */
abstract class IComponent {
    /**
     * @var string (typically "Male" or "Female")
     */
    protected $date;
    /**
     * @var int
     */
    protected $ageGroup;
    /**
     * @var string
     */
    protected $feature;

    /**
     * @param $ageNow
     * @return IComponent $this
     */
    abstract public function setAge($ageNow);

    /**
     * @return string
     */
    abstract public function getAge();

    /**
     * @return string
     */
    abstract public function getFeature();

    /**
     * @param string $fea
     * @return IComponent $this
     */
    abstract public function setFeature($fea);
} 