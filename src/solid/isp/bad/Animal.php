<?php
declare(strict_types=1);

namespace myapp\solid\isp\bad;

interface Animal
{
    public function cry(): void;

    public function walk(): void;

    public function fly(): void;
}
