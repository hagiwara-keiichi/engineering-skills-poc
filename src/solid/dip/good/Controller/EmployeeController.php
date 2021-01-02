<?php
declare(strict_types=1);


namespace myapp\solid\dip\good\Controller;


use myapp\solid\dip\good\Service\EmployeeService;
use myapp\solid\dip\good\Service\EmployeeServiceInterface;

/**
 * Class EmployeeController
 * @package myapp\solid\dip\good\Controller
 */
class EmployeeController
{
    /**
     * @var EmployeeInterface
     */
    private $_service;

    /**
     * EmployeeController constructor.
     * @param EmployeeInterface $service
     */
    public function __construct(EmployeeInterface $service)
    {
        $this->_service = $service;
    }

    /**
     * @param int $employeeId
     * @return string
     */
    public function fetchEmployeeName(int $employeeId): string
    {
        return $this->_service->fetchEmployeeName($employeeId);
    }

    /**
     * @param int $employeeId
     * @return int
     */
    public function fetchEmployeeSalary(int $employeeId): int
    {
        return $this->_service->fetchEmployeeSalary($employeeId);
    }
}