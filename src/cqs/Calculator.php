<?php

declare(strict_types=1);

namespace myapp\cqs;

/**
 * Class Calculator
 * @package myapp\cqs
 */
class Calculator
{
    /**
     * @var int $value
     */
    private $value;

    /**
     * Calculator constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * 加算
     * @param int $num
     * @returns Calculator
     * @return Calculator
     */
    public function add(int $num): Calculator
    {
        $this->value = $this->value + $num;
        return $this;
    }

    /**
     * 減算
     * @param int $num
     * @returns Calculator
     * @return Calculator
     */
    public function sub(int $num): Calculator
    {
        $this->value = $this->value - $num;
        return $this;
    }

    /**
     * 結果
     * @return int
     */
    public function getResult()
    {
        return $this->value;
    }
}

// コマンド
$result = (new Calculator(1))->add(2)->sub(1);

// クエリ
echo $result->getResult();
