<?php
namespace Lpdp;

/**
 * Interface EmptyIConnectInfo
 * Copy this file to IConnectInfo.php, then fill the values in the constants below
 * @package Lpdp
 * @chapter 11 A Universal Class for Connections and a Proxy Pattern for Security
 * @page 222
 */
interface EmptyIConnectInfo {
    /**
     * @var string
     */
    const HOST='';
    /**
     * @var string
     */
    const UNAME='';
    /**
     * @var string
     */
    const PW='';
    /**
     * @var string
     */
    const DBNAME='';

    /**
     * @return void
     */
    public static function doConnect();
} 