<?php
namespace Lpdp;

/**
 * Class UpdateData
 * @package Lpdp
 * @chapter 12 the Flexibility of the Strategy Design Pattern
 * @page 268
 */
class UpdateData implements IStrategy {
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
        $changeField=$this->dataPack[0];
        $oldData=$this->dataPack[1];
        $newData=$this->dataPack[2];

        $this->sql = "UPDATE $this->tableMaster SET `$changeField`='$newData'
            WHERE `$changeField`='$oldData';";

        if($this->hookup->query($this->sql))  {
            echo "$changeField changed from: $oldData to:$newData";
        } else {
            echo 'Change failed: '.$this->hookup->error;
        }
        $this->hookup->close();
    }
} 