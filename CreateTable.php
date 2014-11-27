<?php
namespace Lpdp;

require_once('UniversalConnect.php');

/**
 * Class CreateTable
 * @package Lpdp
 * @chapter 11 A Universal Class for Connections and a Proxy Pattern for Security
 * @page 274
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
        $this->tableMaster = 'helpdesk';
        $this->hookup = UniversalConnect::doConnect();

        $drop = "DROP TABLE IF EXISTS $this->tableMaster;";

        if (true === $this->hookup->query($drop)) {
            printf('Old table %s has been dropped.<br />', $this->tableMaster);
        }

        $sql = "CREATE TABLE $this->tableMaster (
                  id INT NOT NULL AUTO_INCREMENT,
                  chain VARCHAR(3),
                  response TEXT,
                  PRIMARY KEY (id)
                );";

        if (true === $this->hookup->query($sql)) {
            printf("Table $this->tableMaster has been created successfully.<br />");
        }
        $this->hookup->close();
    }
}

$createTable = new CreateTable();