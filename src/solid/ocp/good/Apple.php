<?php
declare(strict_types=1);

namespace myapp\solid\ocp\good;

/**
 * Class Apple
 */
class Apple implements PaymentInterface
{

    public function pay()
    {
        // Appleの決済処理
        echo "Apple Pay()\n";
    }
}
