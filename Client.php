<?php
namespace Lpdp;

/**
 * @param string $className
 */
function __autoload($className) {
    $classNameWithoutNamespace = substr($className, 5);
    require_once "$classNameWithoutNamespace.php";
}
spl_autoload_register('\Lpdp\__autoload');

/**
 * Class Client
 * @package Lpdp
 * @chapter 6 Prototype Design Pattern
 * @page 114
 */
class Client {
    /**
     * @var Marketing
     */
    private $market;
    /**
     * @var Management
     */
    private $manage;
    /**
     * @var Engineering
     */
    private $engineer;

    public function __construct() {
        $this->makeConProto();

        $Tess = clone $this->market;
        $this->setEmployee($Tess, 'Tess Smith', 101, 'ts101-1234', 'tess.png');
        $this->showEmployee($Tess);

        $Jacob = clone $this->market;
        $this->setEmployee($Jacob, 'Jacob Jones', 102, 'jj101-2234', 'jacob.png');
        $this->showEmployee($Jacob);

        $Ricky = clone $this->manage;
        $this->setEmployee($Ricky, 'Ricky Rodriguez', 203, 'rr203-5634', 'ricky.png');
        $this->showEmployee($Ricky);

        $Olivia = clone $this->engineer;
        $this->setEmployee($Olivia, 'Olivia Perez', 302, 'op301-1278', 'olivia.png');
        $this->showEmployee($Olivia);

        $John = clone $this->engineer;
        $this->setEmployee($John, 'John Jackson', 301, 'jj302-1454', 'john.png');
        $this->showEmployee($John);
    }

    /**
     * @return void
     */
    private function makeConProto() {
        $this->market = new Marketing();
        $this->manage = new Management();
        $this->engineer = new Engineering();
    }

    /**
     * @param IAcmePrototype $employeeNow
     * @return void
     */
    private function showEmployee(IAcmePrototype $employeeNow) {
        $px = $employeeNow->getEmployeePic();
        echo '<img src="'.$px.'" width="150" heigh="150" /><br />';
        echo $employeeNow->getName() . '<br />';
        echo $employeeNow->getUnit() . ' : ' . $employeeNow->getDept() . '<br />';
        echo $employeeNow->getId() . '<br />';
    }

    /**
     * @param IAcmePrototype $employeeNow
     * @param $nm
     * @param $dp
     * @param $id
     * @param $px
     * @return void
     */
    private function setEmployee(IAcmePrototype $employeeNow, $nm, $dp, $id, $px) {
        $employeeNow->setName($nm)
            ->setDept($dp)
            ->setId($id)
            ->setEmployeePic("pix/$px");
    }
}

$client = new Client();