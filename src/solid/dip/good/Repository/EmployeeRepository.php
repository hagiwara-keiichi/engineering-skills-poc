<?php
declare(strict_types=1);

namespace myapp\solid\dip\good\Repository;

use myapp\solid\dip\good\Service\EmployeeServiceInterface;

/**
 * Class Salary
 *
 * @package myapp\solid\dip\good\Repository
 */
class EmployeeRepository implements EmployeeServiceInterface
{
    /**
     * @param  int $employeeId
     * @return array
     */
    public function fetchEmployeeById(int $employeeId): array
    {
        return [
            'id' => $employeeId,
            'name' => '山田太郎',
            'salary' => 1000
        ];
    }
}
