<?php

declare(strict_types=1);

namespace myapp\programming\design_pattern;

/**
 * Class Context
 * @package myapp\programming\design_pattern
 */
class Context
{
    private $comparator;

    /**
     * Context constructor.
     * @param $comparator
     */
    public function __construct($comparator)
    {
        $this->comparator = $comparator;
    }

    /**
     * @param array $elements
     * @return array
     */
    public function executeStrategy(array $elements): array
    {
        uasort($elements, [$this->comparator, 'compare']);

        return $elements;
    }
}
