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
 * Class ClientH
 * @package Lpdp
 * @chapter 8 Decorators with Multiple Components
 * @page 163
 */
class ClientH
{
    /**
     * @var IComponent
     */
    private $hotDate;
    /**
     * @var string
     */
    private $progLang;
    /**
     * @var string
     */
    private $hardware;
    /**
     * @var string
     */
    private $food;

    public function __construct()
    {
        $gender = '\\Lpdp\\'.$_POST['gender'];
        $age = $_POST['age'];
        $this->progLang = $_POST['progLang'];
        $this->hardware = $_POST['hardware'];
        $this->food = $_POST['food'];

        $this->hotDate = new $gender();
        $this->hotDate->setAge($age);
        echo $this->hotDate->getAge();
        $this->hotDate = $this->wrapComponent($this->hotDate);
        echo $this->hotDate->getFeature();
    }

    /**
     * @param IComponent $component
     * @return IComponent
     */
    private function wrapComponent(IComponent $component)
    {
        $component = new ProgramLang($component);
        $component->setFeature($this->progLang);
        $component = new Hardware($component);
        $component->setFeature($this->hardware);
        $component = new Food($component);
        $component->setFeature($this->food);

        return $component;
    }
}

$client = new ClientH();