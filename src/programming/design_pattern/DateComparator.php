<?php

declare(strict_types=1);

namespace myapp\programming\design_pattern;

use DateTime;
use Exception;

/**
 * Class DateComparator
 * @package myapp\programming\design_pattern
 */
class DateComparator implements Comparator
{
    /**
     * 日付の比較
     * @param mixed $value1
     * @param mixed $value2
     * @return int
     * @throws Exception
     */
    public function compare($value1, $value2): int
    {
        $aDateTime = new DateTime($value1['date']);
        $bDateTime = new DateTime($value2['date']);

        return $aDateTime <=> $bDateTime;
    }
}
