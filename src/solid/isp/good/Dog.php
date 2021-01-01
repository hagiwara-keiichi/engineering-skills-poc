<?php
declare(strict_types=1);


namespace myapp\solid\isp\good;


/**
 * Class Dog
 * @package myapp\solid\isp\good
 */
class Dog implements Walkable
{
    public function cry(): void
    {
        echo "Woof woof\n";
    }

    public function walk()
    {
        echo "dog walk\n";
    }
}
