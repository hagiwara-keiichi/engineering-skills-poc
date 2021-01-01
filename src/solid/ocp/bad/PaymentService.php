<?php
declare(strict_types=1);

namespace myapp\solid\ocp\bad;

require_once "../../../../vendor/autoload.php";

/**
 * Class PaymentService
 */
class PaymentService
{
    public function Subscribe($paymentMethod)
    {
        switch ($paymentMethod) {
            case "card" :
                (new Card())->Pay();
                break;
            case "apple" :
                (new Apple())->Pay();
                break;
            default :
                break;
        }
    }
}

(new PaymentService())->Subscribe("apple");
(new PaymentService())->Subscribe("card");