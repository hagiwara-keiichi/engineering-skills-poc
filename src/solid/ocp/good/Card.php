<?php
declare(strict_types=1);

namespace myapp\solid\ocp\good;

/**
 * Class Card
 */
class Card implements PaymentInterface
{

    public function pay()
    {
        // Cardの決済
        echo "Card Pay()\n";
    }
}
