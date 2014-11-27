<?php
namespace Lpdp;

/**
 * Class DeleteRecord
 * @package Lpdp
 * @chapter 12 the Flexibility of the Strategy Design Pattern
 * @page 250
 */
class DeleteRecord implements IStrategy {
    public function algorithm() {
        $hookup = UniversalConnect::doConnect();
        $data = $hookup->real_escape_string($_POST['data']);
        echo "the record $data has been obliterated.<br />";
    }
}