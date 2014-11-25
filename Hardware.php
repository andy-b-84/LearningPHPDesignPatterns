<?php
namespace Lpdp;

/**
 * Class Hardware
 * @package Lpdp
 * @chapter 8 Decorators with Multiple Components
 * @page 156
 */
class Hardware extends Decorator {
    /**
     * @var IComponent
     */
    private $hardwareNow;
    /**
     * @var array
     */
    private $box = array(
        'mac' => 'Macintosh',
        'dell' => 'Dell',
        'hp' => 'Hewlett-Packard',
        'lin' => 'Linux',
    );

    /**
     * @param IComponent $dateNow
     */
    public function __construct(IComponent $dateNow) {
        $this->date = $dateNow;
    }

    /**
     * @param string $hdw
     * @return IComponent $this
     */
    public function setFeature($hdw) {
        $this->hardwareNow = $this->box[$hdw];
        return $this;
    }

    /**
     * @return string
     */
    public function getFeature() {
        $output = $this->date->getFeature();
        $fmat = '<br />&nbsp;&nbsp;';
        $output .= "$fmat Current Hardware: ";
        $output .= $this->hardwareNow;
        return $output;
    }
} 