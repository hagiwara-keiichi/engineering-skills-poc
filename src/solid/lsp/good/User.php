<?php
declare(strict_types=1);

namespace myapp\solid\lsp\good;

/**
 * Class User
 */
class User
{
    private $instance;

    public function __construct(Polygon $instance)
    {
        $this->instance = $instance;
    }

    /**
     * @return int
     */
    public function calculateArea(): int
    {
        return $this->instance->area();
    }
}
