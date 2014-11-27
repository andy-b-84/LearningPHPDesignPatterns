<?php
namespace Lpdp;

/**
 * Class SearchData
 * @package Lpdp
 * @chapter 12 the Flexibility of the Strategy Design Pattern
 * @page 249
 */
class SearchData implements IStrategy {
    public function algorithm() {
        $hookup = UniversalConnect::doConnect();
        $data = $hookup->real_escape_string($_POST['data']);
        echo "Here's what you were looking for: $data<br />";
    }
}