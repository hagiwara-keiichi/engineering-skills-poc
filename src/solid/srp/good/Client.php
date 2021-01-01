<?php
declare(strict_types=1);

require_once "../../../../vendor/autoload.php";

use myapp\solid\srp\good\EmployeeFacade;

$client = new EmployeeFacade();
$client->saveEmployee();
$client->reportHours();
$client->calculatePay();
