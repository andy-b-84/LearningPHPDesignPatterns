<?php
namespace Lpdp;

require_once('IMobileFormat.php');

/**
 * Class Desktop
 * @package Lpdp
 * @chapter 7 The Adapter Pattern Using Composition
 * @page 132
 */
class Mobile implements IMobileFormat {
    /**
     * @var string
     */
    private $head = '<!doctype html><html><head>';
    /**
     * @var string
     */
    private $headClose = '<meta charset="UTF-8"><title>Desktop</title></head><body>';
    /**
     * @var string
     */
    private $cap = '</body></html>';
    /**
     * @var string
     */
    private $sampleText;

    /**
     * @return Mobile $this
     */
    public function formatCSS() {
        echo $this->head;
        echo '<link rel="stylesheet" href="mobile.css" />';
        echo $this->headClose;
        echo '<h1>Hello, Everyone!</h1>';
        return $this;
    }

    /**
     * @return Mobile $this
     */
    public function formatGraphics() {
        echo '<img src="pic/fallRiver960.png" width="device-width" height="device-height" alt="river" />';
        return $this;
    }

    /**
     * @return Mobile $this
     */
    public function verticalLayout() {
        $textFile = "text/lorem.txt";
        $openText = fopen($textFile, 'r');
        $textInfo = fread($openText, filesize($textFile));
        fclose($openText);
        $this->sampleText=$textInfo;
        echo '<br /><div>'.$this->sampleText.'</div>';
        echo '<br /><div>'.$this->sampleText.'</div>';
        return $this;
    }

    /**
     * @return Mobile $this
     */
    public function closeHTML() {
        echo $this->cap;
        return $this;
    }
}