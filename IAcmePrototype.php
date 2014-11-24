<?php
namespace Lpdp;

/**
 * Class IAcmePrototype
 * @package Lpdp
 * @chapter 6 Prototype Design Pattern
 * @page 109
 */
abstract class IAcmePrototype {
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $employeePic;
    /**
     * @var string
     */
    protected $dept;

    /**
     * @return void
     */
    abstract public function __clone();

    /**
     * @return string
     */
    abstract public function getDept();

    /**
     * @param string $dept
     * @return IAcmePrototype $this
     */
    abstract public function setDept($dept);

    /**
     * @return string
     */
    abstract public function getUnit();

    /**
     * @return string
     */
    public function getEmployeePic() {
        return $this->employeePic;
    }

    /**
     * @param string $employeePic
     * @return IAcmePrototype $this
     */
    public function setEmployeePic($employeePic) {
        $this->employeePic = $employeePic;
        return $this;
    }

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     * @return IAcmePrototype $this
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param string $name
     * @return IAcmePrototype $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }
} 