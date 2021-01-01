<?php
declare(strict_types=1);

namespace myapp\solid\lsp\bad;

require_once "../../../../vendor/autoload.php";

// 長方形の面積の計算
$instance = new Rectangle();
$instance->setWidth(4);
$instance->setHeight(5);
$result = $instance->area();
echo $result === 20 ? $result . "\nok\n" : $result . "\nng\n";

// SquareがRectangleの継承クラスになっているので、ユーザーがSquareもRectangleであると信じたときに、想定外の結果になる(ちなみに数学的にはSquareはRectangle)
$instance = new Square();
$instance->setWidth(4);
$instance->setHeight(5);
$result = $instance->area();
echo $result === 20 ? $result . "\nok\n" : $result . "\nng\n";
