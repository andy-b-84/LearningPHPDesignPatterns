<?php
namespace Lpdp;

/**
 * Interface IStrategy
 * @package Lpdp
 * @chapter 12 the Flexibility of the Strategy Design Pattern
 * @page 254
 */
interface IStrategy {
    /**
     * @var string
     */
    const TABLENOW = 'survey';
    public function algorithm(array $dataPack);
}