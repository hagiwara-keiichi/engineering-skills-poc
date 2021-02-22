<?php
declare(strict_types=1);

namespace myapp\solid\lsp\good;

require_once "../../../../vendor/autoload.php";

// 長方形の面積の計算
$rectangle = new Rectangle();
$rectangle->setWidth(4);
$rectangle->setHeight(5);
$result = (new User($rectangle))->calculateArea();
echo $result === 20 ? $result . "\nok\n" : $result . "\nng\n";

// 正方形の面積の計算
$square = new Square();
$square->setLength(5);
$result = (new User($square))->calculateArea();
echo $result === 25 ? $result . "\nok\n" : $result . "\nng\n";
