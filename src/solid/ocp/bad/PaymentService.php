<?php
declare(strict_types=1);

namespace myapp\solid\ocp\bad;

/**
 * Class PaymentService
 */
class PaymentService
{
    public function subscribe($paymentMethod)
    {
        switch ($paymentMethod) {
            case "card":
                (new Card())->pay();
                break;
            case "apple":
                (new Apple())->pay();
                break;
            default:
                break;
        }
    }
}
