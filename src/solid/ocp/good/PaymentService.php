<?php
declare(strict_types=1);

namespace myapp\solid\ocp\good;

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

    public function subscribe()
    {
        $this->payment->pay();
    }
}
