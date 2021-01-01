<?php
declare(strict_types=1);


namespace myapp\solid\isp\bad;


class Dog implements Animal
{
    public function cry(): void
    {
        echo "Woof woof\n";
    }

    public function walk(): void
    {
        echo "dog walk\n";
    }

    public function fly(): void
    {
        // 犬は飛べないが、Animalを継承しているので、実装を強制される
    }
}
