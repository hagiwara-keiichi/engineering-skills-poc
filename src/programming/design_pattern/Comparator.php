<?php

declare(strict_types=1);

namespace myapp\programming\design_pattern;

/**
 * Interface Comparator
 * @package myapp\programming\design_pattern
 */
interface Comparator
{
    /**
     * @param $value1
     * @param $value2
     * @return int
     */
    public function compare($value1, $value2): int;
}
