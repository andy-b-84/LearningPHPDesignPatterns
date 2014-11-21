<?php
namespace Lpdp;

require_once ('Product.php');

/**
 * Class TextProduct
 * @package Lpdp
 * @ref LPDP page 88
 * @chapter 5: Factory Method Design Pattern
 */
class TextProduct implements Product {
    /**
     * @var string $this->text
     */
    private $text;

    public function getProperties() {
        $this->text=<<<TEXT
<!doctype html>
<html>
    <head>
        <style type="text/css">
            * {
                font-family: Verdana, Geneva, sans-serif;
            }
            header {
                color: #FF0000;
                font-weight: bold;
                font-size: 24px;
            }
            p {
                font-family: Verdana, Geneva, sans-serif;
            }
        </style>
        <meta cherset="UTF-8" />
        <title>Mali</title>
    </head>
    <body>
        <header>Mali</header>The Sudanese Republic and Senegal became independent of France in
1960 as the Mali Federation. When Senegal withdrew after only a
few months, what formerly made up the Sudanese Republic was
renamed Mali. Rule by dictatorship was brought to a close in 1991
by a military coup that ushered in a period of democratic rule.
President Alpha KONARE won Mali's first two democratic presidential
elections in 1992 and 1997. In keeping with Mali's two-term
constitutional limit, he stepped down in 2002 and was succeeded by
Amadou TOURE, who was elected to a second term in 2007 elections
that were widely judged to be free and fair.
A military coup overthrew the government in March 2012, claiming
that the government had not adequately supported the Malian army's
fight against an advancing Tuareg-led rebellion in the north.
Heavy international pressure forced coup leaders to accelerate
the transition back to democratic rule and, to that end,
Dioncounda TRAORE was installed as interim president on 12 April 2012
        <p>
    </body>
</html>
TEXT;

        return $this->text;
    }
} 