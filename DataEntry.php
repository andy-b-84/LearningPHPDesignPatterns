<?php
namespace Lpdp;

/**
 * Class DataEntry
 * @package Lpdp
 * @chapter 12 the Flexibility of the Strategy Design Pattern
 * @page 248
 */
class DataEntry implements IStrategy {
    public function algorithm() {
        $hookup = UniversalConnect::doConnect();
        $data = $hookup->real_escape_string($_POST['data']);
        echo "This data has been entered: $data<br />";
    }
} 