<?php
namespace Lpdp;

/**
 * Interface IState
 * @package Lpdp
 * @chapter 10 State
 * @page 196
 */
interface IState {
    public function turnLightOff();
    public function turnLightOn();
    public function turnLightBrighter();
    public function turnLightBrightest();
} 