<?php
namespace Lpdp;

/**
 * Class Context
 * @package Lpdp
 * @chapter 10 State
 * @page 207
 */
class Context {
    /**
     * @var Cell1State
     */
    private $cell1;
    /**
     * @var Cell2State
     */
    private $cell2;
    /**
     * @var Cell3State
     */
    private $cell3;
    /**
     * @var Cell4State
     */
    private $cell4;
    /**
     * @var Cell5State
     */
    private $cell5;
    /**
     * @var Cell6State
     */
    private $cell6;
    /**
     * @var Cell7State
     */
    private $cell7;
    /**
     * @var Cell8State
     */
    private $cell8;
    /**
     * @var Cell9State
     */
    private $cell9;

    /**
     * @var IMatrix
     */
    private $currentState;

    public function __construct() {
        $this->cell1 = new Cell1State($this);
        $this->cell2 = new Cell2State($this);
        $this->cell3 = new Cell3State($this);
        $this->cell4 = new Cell4State($this);
        $this->cell5 = new Cell5State($this);
        $this->cell6 = new Cell6State($this);
        $this->cell7 = new Cell7State($this);
        $this->cell8 = new Cell8State($this);
        $this->cell9 = new Cell9State($this);

        $this->currentState = $this->cell5;
    }

    public function doUp() {
        $this->currentState->goUp();
    }

    public function doDown() {
        $this->currentState->goDown();
    }

    public function doLeft() {
        $this->currentState->goLeft();
    }

    public function doRight() {
        $this->currentState->goRight();
    }

    /**
     * @param IMatrix $state
     */
    public function setState(IMatrix $state) {
        $this->currentState = $state;
    }

    /**
     * @return Cell1State
     */
    public function getCell1()
    {
        return $this->cell1;
    }

    /**
     * @return Cell2State
     */
    public function getCell2()
    {
        return $this->cell2;
    }

    /**
     * @return Cell3State
     */
    public function getCell3()
    {
        return $this->cell3;
    }

    /**
     * @return Cell4State
     */
    public function getCell4()
    {
        return $this->cell4;
    }

    /**
     * @return Cell5State
     */
    public function getCell5()
    {
        return $this->cell5;
    }

    /**
     * @return Cell6State
     */
    public function getCell6()
    {
        return $this->cell6;
    }

    /**
     * @return Cell7State
     */
    public function getCell7()
    {
        return $this->cell7;
    }

    /**
     * @return Cell8State
     */
    public function getCell8()
    {
        return $this->cell8;
    }

    /**
     * @return Cell9State
     */
    public function getCell9()
    {
        return $this->cell9;
    }


} 