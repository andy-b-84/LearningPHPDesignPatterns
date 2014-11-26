<?php
namespace Lpdp;

require_once('UniversalConnect.php');

/**
 * Class CreateTable
 * @package Lpdp
 * @chapter 11 A Universal Class for Connections and a Proxy Pattern for Security
 * @page 226
 */
class CreateTable {
    /**
     * @var string
     */
    private $tableMaster;
    /**
     * @var \mysqli
     */
    private $hookup;

    public function __construct() {
        $this->tableMaster = 'proxyLog';
        $this->hookup = UniversalConnect::doConnect();

        $drop = "DROP TABLE IF EXISTS $this->tableMaster;";
        if (true === $this->hookup->query($drop)) {
            printf('Old table %s has been dropped.<br />', $this->tableMaster);
        }

        $sql = "CREATE TABLE $this->tableMaster (uname NVARCHAR(15), pw NVARCHAR(120));";
        if (true === $this->hookup->query($sql)) {
            echo "Table $this->tableMaster has been created successfully.<br />";
        }
        $this->hookup->close();
    }
}

$createTable = new CreateTable();