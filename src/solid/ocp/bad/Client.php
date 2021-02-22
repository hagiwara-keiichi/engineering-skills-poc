<?php
declare(strict_types=1);

namespace myapp\solid\ocp\bad;

require_once "../../../../vendor/autoload.php";

(new PaymentService())->subscribe("apple");
(new PaymentService())->subscribe("card");
