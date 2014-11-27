<?php
namespace Lpdp;

require_once('UniversalConnect.php');

/**
 * Class CreateTable
 * @package Lpdp
 * @chapter 12 the Flexibility of the Strategy Design Pattern
 * @page 255
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
        $this->tableMaster = 'survey';
        $this->hookup = UniversalConnect::doConnect();

        $drop = "DROP TABLE IF EXISTS $this->tableMaster;";

        if (true === $this->hookup->query($drop)) {
            printf('Old table %s has been dropped.<br />', $this->tableMaster);
        }

        $sql = "CREATE TABLE $this->tableMaster (
                  id SERIAL,
                  company NVARCHAR(40),
                  devdes  NVARCHAR(10),
                  lang    NVARCHAR(15),
                  plat    NVARCHAR(15),
                  style   NVARCHAR(20),
                  device  NVARCHAR(10),
                  PRIMARY KEY (id)
              );";

        if (true === $this->hookup->query($sql)) {
            printf("Table $this->tableMaster has been created successfully.<br />");
        }

        $this->hookup->close();
    }
}

$createTable = new CreateTable();