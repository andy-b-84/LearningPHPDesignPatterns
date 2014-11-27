<?php
namespace Lpdp;

/**
 * Class Client
 * @package Lpdp
 * @chapter 12 the Flexibility of the Strategy Design Pattern
 * @page 245
 */
class Client {
    public function insertData() {
        $context = new Context(new DataEntry());
        $context->algorithm();
    }

    public function findData() {
        $context = new Context(new SearchData());
        $context->algorithm();
    }

    public function showAll() {
        $context = new Context(new DisplayData());
        $context->algorithm();
    }

    public function changeData() {
        $context = new Context(new UpdateData());
        $context->algorithm();
    }

    public function killer() {
        $context = new Context(new DeleteRecord());
        $context->algorithm();
    }
}