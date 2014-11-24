<?php
namespace Lpdp;

require_once('Desktop.php');

/**
 * Class Desktop
 * @package Lpdp
 * @chapter 7 The Adapter Pattern Using Composition
 */
class Client {
    /**
     * @var IFormat
     */
    private $desktop;

    public function __construct() {
        $this->desktop = new Desktop();
    }

    /**
     * @return void
     */
    public function render() {
        $this->desktop->formatCSS()
            ->formatGraphics()
            ->horizontalLayout()
            ->closeHTML();
    }
}

$client = new Client();
$client->render();