<?php
declare(strict_types=1);

namespace myapp\solid\srp\bad;

/**
 * Class Employee
 */
class Employee
{

    /**
     * 経理部門が規定する
     * 報告先はCFO
     */
    public function calculatePay()
    {
        $this->regularHours();
    }

    /**
     * 人事部門が規定して使用する
     * 報告先はCOO
     */
    public function reportHours()
    {
        $this->regularHours();
    }

    /**
     * データベース管理者が規定する
     * 報告先はCTO
     */
    public function save()
    {
    }

    /**
     * 所定労働時間の計算
     */
    private function regularHours()
    {
    }
}
