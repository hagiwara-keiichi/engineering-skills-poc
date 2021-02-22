<?php
declare(strict_types=1);

use myapp\cqs\Calculator;

// コマンド
$result = (new Calculator(1))->add(2)->sub(1);

// クエリ
echo $result->getResult();
