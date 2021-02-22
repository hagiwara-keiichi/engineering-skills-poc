<?php
declare(strict_types=1);

namespace myapp\solid\dip\good\Controller;

/**
 * Interface EmployeeInterface
 *
 * @package myapp\solid\dip\good
 */
interface EmployeeInterface
{
    /**
     * @param  int $employeeId
     * @return string
     */
    public function fetchEmployeeName(int $employeeId): string;

    /**
     * @param  int $employeeId
     * @return int
     */
    public function fetchEmployeeSalary(int $employeeId): int;
}
