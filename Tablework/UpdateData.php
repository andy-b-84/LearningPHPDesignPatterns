<?php
namespace Lpdp\Tablework;

require_once('../UniversalConnect.php');
use \Lpdp\UniversalConnect;

/**
 * Class UpdateData
 * @package Lpdp
 * @chapter 13 The Chain of Responsibility in a MySQL Help Desk
 * @page 277
 */
class UpdateData {
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

        $sql = "UPDATE $this->tableMaster SET response='$response' WHERE chain='$chain';";

        $result = $this->hookup->query($sql);

        if ($result) {
            printf('Chain query: %s<br />Response %s<br />have been changed into %s.', $chain, $response, $this->tableMaster);
        } else if (false === $result) {
            printf('Invalid query: %s<br />Whole query: %s<br />', $this->hookup->error, $sql);
            exit();
        }
        $this->hookup->close();
    }
}

$updateData = new UpdateData();