<?php
declare(strict_types=1);

namespace myapp\solid\isp\good;

require_once "../../../../vendor/autoload.php";

(new Dog())->cry();
(new Dog())->walk();
(new Bard())->cry();
(new Bard())->walk();
(new Bard())->fly();
