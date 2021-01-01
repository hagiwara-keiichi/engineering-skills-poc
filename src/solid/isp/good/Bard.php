<?php
declare(strict_types=1);


namespace myapp\solid\isp\good;


/**
 * Class Bard
 * @package myapp\solid\isp\good
 */
class Bard implements Animal
{
    public function cry(): void
    {
        echo "chirp\n";
    }

    public function fly(): void
    {
        echo "bard fly\n";
    }

    public function walk()
    {
        echo "bard walk\n";
    }
}
