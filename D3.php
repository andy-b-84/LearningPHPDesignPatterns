<?php
namespace Lpdp;

/**
 * Class D3
 * @package Lpdp
 * @chapter 13 The Chain of Responsibility in a MySQL Help Desk
 * @page 287
 */
class D3 extends Handler {
    /**
     * @param Request $request
     */
    public function handleRequest(Request $request) {
        $dateCheck = $request->getService();
        $this->monthNow = intval($dateCheck['mon']);

        $this->handleNow = (10 == $this->monthNow);

        if ($this->handleNow) {
            $this->hungerFactory = new HungerFactory();
            echo $this->hungerFactory->feedFactory(new C3());
        } else if (null != $this->successor) {
            $this->successor->handleRequest($request);
        }
    }
}