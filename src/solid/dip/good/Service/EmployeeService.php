<?php
declare(strict_types=1);

namespace myapp\solid\dip\good\Service;

use myapp\solid\dip\good\Controller\EmployeeInterface;

/**
 * Class EmployeeService
 *
 * @package myapp\solid\dip\good\Service
 */
class EmployeeService implements EmployeeInterface
{

    /**
     * @var EmployeeServiceInterface
     */
    private $repository;

    public function __construct(EmployeeServiceInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param  int $employeeId
     * @return string
     */
    public function fetchEmployeeName(int $employeeId): string
    {
        return $this->repository->fetchEmployeeById($employeeId)['name'];
    }

    /**
     * @param  int $employeeId
     * @return int
     */
    public function fetchEmployeeSalary(int $employeeId): int
    {
        return $this->repository->fetchEmployeeById($employeeId)['salary'];
    }
}
