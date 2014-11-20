<?php
namespace Lpdp;

require_once('Product.php');

/**
 * Class GraphicProduct
 * @package Lpdp
 * @ref LPDP page 83
 * @chapter 5: Factory Method Design Pattern
 */
class GraphicProduct implements Product {
    /**
     * @var string $this->image
     */
    private $image;

    public function getProperties() {
        $this->image=<<<IMAGE
#     #
#     #  ######  #       #        ####
#     #  #       #       #       #    #
#######  #####   #       #       #    #   ###
#     #  #       #       #       #    #   ###
#     #  #       #       #       #    #    #
#     #  ######  ######  ######   ####    #

#     #                                   ###
#  #  #   ####   #####   #       #####    ###
#  #  #  #    #  #    #  #       #    #   ###
#  #  #  #    #  #    #  #       #    #    #
#  #  #  #    #  #####   #       #    #
#  #  #  #    #  #   #   #       #    #   ###
 ## ##    ####   #    #  ######  #####    ###
IMAGE;
        return $this->image;
    }
} 