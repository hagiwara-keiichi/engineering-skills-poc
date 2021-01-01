<?php
declare(strict_types=1);

namespace myapp\solid\lsp\good;

/**
 * 長方形
 * Class Rectangle
 * @package myapp\solid\lsp\good
 */
class Rectangle implements Polygon
{
    /**
     * 幅
     * @var int $width
     */
    private $width;

    /**
     * 高さ
     * @var int $height
     */
    private $height;

    /**
     * 高さのセット
     * @param int $height 高さ
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * 幅のセット
     * @param int $width 幅
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * 長方形の面積
     * @return int
     */
    public function area(): int
    {
        return $this->height * $this->width;
    }
}
