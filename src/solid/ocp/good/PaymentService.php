<?php
declare(strict_types=1);

require_once "../../../../vendor/autoload.php";

use myapp\solid\ocp\good\PaymentInterface;
use myapp\solid\ocp\good\Card;
use myapp\solid\ocp\good\Apple;

/**
 * Class PaymentService
 */
class PaymentService
{
    private $payment;

    public function __construct(PaymentInterface $payment)
    {
        $this->payment = $payment;
    }

    public function Subscribe()
    {
        $this->payment->Pay();
    }
}

(new PaymentService(new Card()))->Subscribe();
(new PaymentService(new Apple()))->Subscribe();