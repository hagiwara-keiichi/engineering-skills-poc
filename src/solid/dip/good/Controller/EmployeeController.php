<?php
declare(strict_types=1);

namespace myapp\solid\dip\good\Controller;

/**
 * Class EmployeeController
 *
 * @package myapp\solid\dip\good\Controller
 */
class EmployeeController
{
    /**
     * @var EmployeeInterface
     */
    private $service;

    /**
     * EmployeeController constructor.
     *
     * @param EmployeeInterface $service
     */
    public function __construct(EmployeeInterface $service)
    {
        $this->service = $service;
    }

    /**
     * @param  int $employeeId
     * @return string
     */
    public function fetchEmployeeName(int $employeeId): string
    {
        return $this->service->fetchEmployeeName($employeeId);
    }

    /**
     * @param  int $employeeId
     * @return int
     */
    public function fetchEmployeeSalary(int $employeeId): int
    {
        return $this->service->fetchEmployeeSalary($employeeId);
    }
}
