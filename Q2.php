<?php
namespace Lpdp;

/**
 * Class Q2
 * @package Lpdp
 * @chapter 13 The Chain of Responsibility in a MySQL Help Desk
 * @page 283
 */
class Q2 extends Handler{
    public function handleRequest(Request $request) {
        $this->handle = 'q2';
        if ($request->getService() == $this->handle) {
            $this->sql = "SELECT response FROM $this->tableMaster WHERE chain='$this->handle';";

            if($result = $this->hookup->query($this->sql)) {
                $row = $result->fetch_assoc();
                echo $row['response'];
            }
        } elseif(null != $this->successor) {
            $this->successor->handleRequest($request);
        }
    }
} 