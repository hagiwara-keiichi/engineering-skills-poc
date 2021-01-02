<?php
declare(strict_types=1);

namespace myapp\solid\dip\bad;

use myapp\solid\dip\bad\Controller\EmployeeController;
use myapp\solid\dip\bad\Repository\EmployeeRepository;
use myapp\solid\dip\bad\Service\EmployeeService;

require_once "../../../../vendor/autoload.php";

echo (new EmployeeController(new EmployeeService(new EmployeeRepository())))->Pay(1) . "\n";
