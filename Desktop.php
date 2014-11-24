<?php
namespace Lpdp;

require_once('IFormat.php');

/**
 * Class Desktop
 * @package Lpdp
 * @chapter 7 The Adapter Pattern Using Composition
 * @page 132
 */
class Desktop implements IFormat {
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
     * @return Desktop $this
     */
    public function formatCSS() {
        echo $this->head;
        echo '<link rel="stylesheet" href="desktop.css" />';
        echo $this->headClose;
        echo '<h1>Hello, Everyone!</h1>';
        return $this;
    }

    /**
     * @return Desktop $this
     */
    public function formatGraphics() {
        echo '<img class="pixRight" src="pic/fallRiver720.png" width="720" height="480" alt="river" />';
        return $this;
    }

    /**
     * @return Desktop $this
     */
    public function horizontalLayout() {
        $textFile = "text/lorem.txt";
        $openText = fopen($textFile, 'r');
        $textInfo = fread($openText, filesize($textFile));
        fclose($openText);
        $this->sampleText=$textInfo;
        echo '<div>'.$this->sampleText.'</div>';
        echo '<br /><div>'.$this->sampleText.'</div>';
        return $this;
    }

    /**
     * @return Desktop $this
     */
    public function closeHTML() {
        echo $this->cap;
        return $this;
    }
}