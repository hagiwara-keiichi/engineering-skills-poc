<?php
declare(strict_types=1);

namespace myapp\solid\lsp\good;

/**
 * 正方形
 * Class Square
 * @package myapp\solid\lsp\good
 */
class Square implements Polygon
{
    /**
     * 長さ
     * @var int $length
     */
    private $length;

    /**
     * 長さのセット
     * @param int $length 長さ
     */
    public function setLength(int $length): void
    {
        $this->length = $length;
    }

    /**
     * 正方形の面積
     * @return int
     */
    public function area(): int
    {
        return pow($this->length, 2);
    }
}
