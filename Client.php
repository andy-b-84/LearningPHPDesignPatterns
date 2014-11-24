<?php
namespace Lpdp;

require_once('Mobile.php');
require_once('MobileAdapter.php');

/**
 * Class Desktop
 * @package Lpdp
 * @chapter 7 The Adapter Pattern Using Composition
 * @page 138
 */
class Client {
    /**
     * @var IMobileFormat
     */
    private $mobile;
    /**
     * @var IFormat
     */
    private $mobileAdapter;

    public function __construct() {
        $this->mobile = new Mobile();
        $this->mobileAdapter = new MobileAdapter($this->mobile);
    }

    /**
     * @return void
     */
    public function render() {
        $this->mobileAdapter->formatCSS()
            ->formatGraphics()
            ->horizontalLayout()
            ->closeHTML();
    }
}

$client = new Client();
$client->render();