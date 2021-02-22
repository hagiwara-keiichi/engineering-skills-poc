<?php

declare(strict_types=1);

namespace myapp\solid\dip\bad\Controller;

use myapp\solid\dip\bad\Service\EmployeeService;

/**
 * Class EmployeeController
 *
 * @package myapp\solid\dip\bad\Controller
 */
class EmployeeController
{
    /**
     * @var EmployeeService
     */
    private $service;

    /**
     * EmployeeController constructor.
     *
     * @param EmployeeService $service
     */
    public function __construct(EmployeeService $service)
    {
        $this->service = $service;
    }

    /**
     * @param  int $employeeId
     * @return string
     */
    public function pay(int $employeeId): string
    {
        return $this->service->fetchEmployeeSalary($employeeId);
    }
}
