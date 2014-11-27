<?php
namespace Lpdp;

/**
 * Class DisplayData
 * @package Lpdp
 * @chapter 12 the Flexibility of the Strategy Design Pattern
 * @page 249
 */
class DisplayData implements IStrategy {
    public function algorithm() {
        //$hookup = UniversalConnect::doConnect();
        $data = 'Here be all the data!';
        echo "$data<br />";
    }
}