<?php

declare(strict_types=1);

namespace myapp\programming\design_pattern\Tests;

use myapp\programming\design_pattern\Context;
use myapp\programming\design_pattern\DateComparator;
use myapp\programming\design_pattern\IdComparator;
use PHPUnit\Framework\TestCase;

/**
 * Class StrategyTest
 * @package myapp\programming\design_pattern\Tests
 */
class StrategyTest extends TestCase
{
    /**
     * @return array[]
     */
    public function provideIntegers(): array
    {
        return [
            [
                [
                    ['id' => 2],
                    ['id' => 1],
                    ['id' => 3]
                ],
                ['id' => 1],
            ],
            [
                [
                    ['id' => 3],
                    ['id' => 2],
                    ['id' => 1]
                ],
                ['id' => 1],
            ],
        ];
    }

    /**
     * @return array[]
     */
    public function provideDates(): array
    {
        return [
            [
                [
                    ['date' => '2014-03-03'],
                    ['date' => '2015-03-02'],
                    ['date' => '2013-03-01']
                ],
                ['date' => '2013-03-01'],
            ],
            [
                [
                    ['date' => '2014-02-03'],
                    ['date' => '2013-02-01'],
                    ['date' => '2015-02-02']
                ],
                ['date' => '2013-02-01'],
            ],
        ];
    }

    /**
     * @dataProvider provideIntegers
     *
     * @param array $collection
     * @param array $expected
     */
    public function testIdComparator(array $collection, array $expected): void
    {
        $elements = (new Context(new IdComparator()))
            ->executeStrategy($collection);
        $firstElement = array_shift($elements);
        $this->assertSame($expected, $firstElement);
    }

    /**
     * @dataProvider provideDates
     *
     * @param array $collection
     * @param array $expected
     */
    public function testDateComparator(array $collection, array $expected): void
    {
        $elements = (new Context(new DateComparator()))
            ->executeStrategy($collection);
        $firstElement = array_shift($elements);
        $this->assertSame($expected, $firstElement);
    }
}
