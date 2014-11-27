<?php
namespace Lpdp;

/**
 * Class DeleteRecord
 * @package Lpdp
 * @chapter 12 the Flexibility of the Strategy Design Pattern
 * @page 268
 */
class DeleteRecord implements IStrategy {
    /**
     * @var string
     */
    private $tableMaster;
    /**
     * @var array
     */
    private $dataPack;
    /**
     * @var \mysqli
     */
    private $hookup;
    /**
     * @var string
     */
    private $sql;

    public function algorithm(array $dataPack) {
        $this->tableMaster=IStrategy::TABLENOW;
        $this->hookup=UniversalConnect::doConnect();
        $this->dataPack=$dataPack;
        $destroy=intval($this->dataPack[0]);

        $this->sql = "DELETE FROM $this->tableMaster WHERE `id`=$destroy;";

        if($this->hookup->query($this->sql))  {
            echo "Record $destroy removed from table $this->tableMaster";
        } else {
            echo 'Removal failed: '.$this->hookup->error;
        }
        $this->hookup->close();
    }
}