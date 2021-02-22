<?php
declare(strict_types=1);

namespace myapp\solid\srp\good;

/**
 * Class EmployeeFacade
 *
 * @package myapp\solid\srp\good
 */
class EmployeeFacade
{

    private $payCalculator;
    private $hourReporter;
    private $employeeSaver;

    public function __construct()
    {
        $this->payCalculator = new PayCalculator();
        $this->hourReporter = new HourReporter();
        $this->employeeSaver = new EmployeeSaver();
    }

    /**
     * 従業員登録
     */
    public function saveEmployee(): void
    {
        echo $this->employeeSaver->saveEmployee() ?
            "従業員登録が完了しました\n" :
            "従業員登録に失敗しました\n";
    }

    /**
     * 労働時間計算
     */
    public function reportHours(): void
    {
        echo "労働時間は" .
            $this->hourReporter->reportHours() .
            "時間です\n";
    }

    /**
     * 給与計算
     */
    public function calculatePay(): void
    {
        echo "給与は" .
            $this->payCalculator->calculatePay() .
            "円です\n";
    }
}
