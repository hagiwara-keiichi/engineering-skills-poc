<?php
declare(strict_types=1);

namespace myapp\solid\ocp\good;

require_once "../../../../vendor/autoload.php";

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