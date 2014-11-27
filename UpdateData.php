<?php
namespace Lpdp;

/**
 * Class UpdateData
 * @package Lpdp
 * @chapter 12 the Flexibility of the Strategy Design Pattern
 * @page 249
 */
class UpdateData implements IStrategy {
    public function algorithm() {
        $hookup = UniversalConnect::doConnect();
        $data = $hookup->real_escape_string($_POST['data']);
        echo "Your new data is now: $data<br />";
    }
}