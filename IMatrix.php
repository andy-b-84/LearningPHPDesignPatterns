<?php
namespace Lpdp;

/**
 * Class IMatrix
 * @package Lpdp
 * @chapter 10 State
 * @page 206
 * @note I prefer using an abstract class here instead of an interface, even if it only has concrete methods :
 *       I only overload what needs to be, which leaves me with fewer duplicate code in the subclasses,
 *       and I still cannot instantiate the IMatrix "interface".
 *       Well, that's what the abstract keyword in front of the "class" keyword is for anyway, IMHO :)
 */
abstract class IMatrix {
    /**
     * @var Context
     */
    protected $context;

    public function __construct(Context $context) {
        $this->context = $context;
    }

    public function goUp() {
        //Illegal move
    }

    public function goDown() {
        //Illegal move
    }

    public function goLeft() {
        //Illegal move
    }

    public function goRight() {
        //Illegal move
    }
}