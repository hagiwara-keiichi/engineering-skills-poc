<?php
declare(strict_types=1);

namespace myapp\ci;

/**
 * Class User
 * @package myapp\test\unit_test
 */
class User
{
    public $first_name;
    public $surname;

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return trim("$this->first_name $this->surname");
    }
}
