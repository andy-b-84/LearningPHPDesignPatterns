<?php
namespace Lpdp;

/**
 * Class D6
 * @package Lpdp
 * @chapter 13 The Chain of Responsibility in a MySQL Help Desk
 * @page 287
 */
class D6 extends Handler {
    /**
     * @param Request $request
     */
    public function handleRequest(Request $request) {
        $dateCheck = $request->getService();
        $this->monthNow = intval($dateCheck['mon']);

        $this->handleNow = (12 == $this->monthNow);

        if ($this->handleNow) {
            $this->hungerFactory = new HungerFactory();
            echo $this->hungerFactory->feedFactory(new C6());
        } else if (null != $this->successor) {
            $this->successor->handleRequest($request);
        }
    }
}