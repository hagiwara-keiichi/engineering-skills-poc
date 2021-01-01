<?php
declare(strict_types=1);

require_once "../../../../vendor/autoload.php";

use myapp\solid\ocp\bad\Card;
use myapp\solid\ocp\bad\Apple;

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