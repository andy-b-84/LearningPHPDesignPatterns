<?php
namespace Lpdp;

/**
 * Class D2
 * @package Lpdp
 * @chapter 13 The Chain of Responsibility in a MySQL Help Desk
 * @page 287
 */
class D2 extends Handler {
    /**
     * @param Request $request
     */
    public function handleRequest(Request $request) {
        $dateCheck = $request->getService();
        $this->monthNow = intval($dateCheck['mon']);
        $this->dayNow = intval($dateCheck['mday']);

        $this->handleNow = ((9 == $this->monthNow) && (22 < $this->dayNow));

        if ($this->handleNow) {
            $this->hungerFactory = new HungerFactory();
            echo $this->hungerFactory->feedFactory(new C2());
        } else if (null != $this->successor) {
            $this->successor->handleRequest($request);
        }
    }
}