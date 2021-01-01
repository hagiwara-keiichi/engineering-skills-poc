<?php
declare(strict_types=1);

namespace myapp\solid\srp\good;

/**
 * Class PayCalculator
 * 経理部門→CFO
 *
 * @package myapp\solid\srp\good
 */
class PayCalculator
{

    /**
     * PayCalculator constructor.
     */
    public function __construct()
    {
    }

    /**
     * 経理部門が規定する
     * 報告先はCFO
     */
    public function calculatePay(): int
    {
        return $this->regularHours() * 1000;
    }

    /**
     * 所定労働時間の計算
     * @return int
     */
    private function regularHours(): int
    {
        // 何らかの経理部門用の処理
        return 8;
    }

}