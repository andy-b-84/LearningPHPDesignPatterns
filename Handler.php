<?php
namespace Lpdp;

/**
 * Class Handler
 * @package Lpdp
 * @chapter 13 The Chain of Responsibility in a MySQL Help Desk
 * @page 283
 */
abstract class Handler {
    /**
     * @var Handler
     */
    protected $successor;
    /**
     * @var \mysqli
     */
    protected $hookup;
    /**
     * @var string
     */
    protected $tableMaster = 'helpdesk';
    /**
     * @var string
     */
    protected $sql;
    /**
     * @var string
     */
    protected $handle;

    public function __construct() {
        $this->hookup = UniversalConnect::doConnect();
    }

    /**
     * @param Handler $nextService
     */
    public function setSuccessor(Handler $nextService) {
        $this->successor = $nextService;
    }

    public function __destruct() {
        $this->hookup->close();
    }

    /**
     * @param Request $request
     */
    abstract public function handleRequest(Request $request);
} 