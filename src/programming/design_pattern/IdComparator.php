<?php

declare(strict_types=1);

namespace myapp\programming\design_pattern;

/**
 * Class IdComparator
 * @package myapp\programming\design_pattern
 */
class IdComparator implements Comparator
{
    /**
     * 数値の比較
     * @param mixed $value1
     * @param mixed $value2
     * @return int
     */
    public function compare($value1, $value2): int
    {
        return $value1['id'] <=> $value2['id'];
    }
}
