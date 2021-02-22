<?php

declare(strict_types=1);

namespace myapp\solid\dip\bad\Repository;

/**
 * Class AnotherEmployeeRepository
 *
 * @package myapp\solid\dip\bad\Repository
 */
class EmployeeRepository
{
    /**
     * @param  int $employeeId
     * @return array
     */
    public function fetchEmployeeNameById(int $employeeId): array
    {
        return [
            'id' => $employeeId,
            'name' => '山田太郎'
        ];
    }
}
