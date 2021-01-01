<?php

namespace myapp\solid\isp\bad;

class Bard implements Animal
{
    public function cry(): void
    {
        echo "chirp\n";
    }

    public function walk(): void
    {
        echo "bard walk\n";
    }

    public function fly(): void
    {
        echo "bard fly\n";
    }
}
