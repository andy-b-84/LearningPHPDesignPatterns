<?php
namespace Lpdp;

require_once('ISubject.php');

/**
 * Class RealSubject
 * @package Lpdp
 * @chapter 11 A Universal Class for Connections and a Proxy Pattern for Security
 * @page 234
 */
class RealSubject {
    public function request() {
        $practice = <<<PRACTICE
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel='stylesheet' type='text/css' href='proxy.css' />
    </head>
    <body>
        <header>PHP Tip Sheet:<br /><span class='subhead'>For OOP Developers</span></header>
        <ol>
            <li>Program to the interface and not the implementation.</li>
            <li>Encapsulate your objects.</li>
            <li>Favor composition over class inheritance.</li>
            <li>A class should only have a single responsibility.</li>
        </ol>
    </body>
</html>
PRACTICE;
        echo $practice;
    }
} 