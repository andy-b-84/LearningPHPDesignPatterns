<?php
namespace Lpdp\Tablework;

require_once('../UniversalConnect.php');
use \Lpdp\UniversalConnect;

/**
 * Class InsertData
 * @package Lpdp
 * @chapter 13 The Chain of Responsibility in a MySQL Help Desk
 * @page 276
 */
class InsertData {
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

        $chain = $this->hookup->real_escape_string($_POST['chain']);
        $response = $this->hookup->real_escape_string($_POST['response']);

        $sql = "INSERT INTO $this->tableMaster (chain, response) VALUE ('$chain', '$response');";

        $result = $this->hookup->query($sql);

        if ($result) {
            printf('Chain query: %s<br />Response %s<br />have been inserted into %s.', $chain, $response, $this->tableMaster);
        } else if (false === $result) {
            printf('Invalid query: %s<br />Whole query: %s<br />', $this->hookup->error, $sql);
            exit();
        }
        $this->hookup->close();
    }
}

$insertData = new InsertData();