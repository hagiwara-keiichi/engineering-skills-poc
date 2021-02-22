<?php
declare(strict_types=1);

namespace myapp\solid\srp\good;

/**
 * Class EmployeeSaver
 * データベース管理者→CTO
 *
 * @package myapp\solid\srp\good
 */
class EmployeeSaver
{

    /**
     * EmployeeSaver constructor.
     */
    public function __construct()
    {
    }

    /**
     * データベース管理者が規定して使用する
     * 報告先はCTO
     *
     * @return bool
     */
    public function saveEmployee(): bool
    {
        // 何らかの従業員登録処理
        return true;
    }
}
