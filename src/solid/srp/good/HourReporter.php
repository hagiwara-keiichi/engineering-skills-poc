<?php
declare(strict_types=1);

namespace myapp\solid\srp\good;

/**
 * Class HourReporter
 * 人事部門→COO
 * @package myapp\solid\srp\good
 */
class HourReporter
{

    /**
     * HourReporter constructor.
     */
    public function __construct()
    {
    }

    /**
     * 人事部門が規定して使用する
     * 報告先はCOO
     */
    public function reportHours(): int
    {
        return $this->regularHours();
    }

    /**
     * 所定労働時間の計算
     * @return int
     */
    private function regularHours(): int
    {
        // 何らかの人事部門用の処理
        return 8;
    }
}