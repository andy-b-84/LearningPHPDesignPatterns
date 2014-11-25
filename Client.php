<?php
namespace Lpdp;

/**
 * @param string $className
 */
function __autoload($className) {
    $classNameWithoutNamespace = substr($className, 5);
    require_once("$classNameWithoutNamespace.php");
}
spl_autoload_register('\\Lpdp\\__autoload');

/**
 * Class Client
 * @package Lpdp
 * @chapter 8 Decorators with Multiple Components
 * @page 158
 */
class Client
{
    /**
     * @var IComponent
     */
    private $hotDate;

    public function __construct()
    {
        $this->hotDate = new Female();
        $this->hotDate->setAge('Age Group 4');
        echo $this->hotDate->getAge();
        $this->hotDate = $this->wrapComponent($this->hotDate);
        echo $this->hotDate->getFeature();
    }

    private function wrapComponent(IComponent $component)
    {
        $component = new ProgramLang($component);
        $component->setFeature('php');
        $component = new Hardware($component);
        $component->setFeature('lin');
        $component = new Food($component);
        $component->setFeature('veg');

        return $component;
    }
}

$client = new Client();