<?php
declare(strict_types=1);

namespace myapp\solid\lsp\bad;

/**
 * 長方形
 * Class Rectangle
 *
 * @package myapp\solid\lsp\bad
 */
class Rectangle
{
    private $height;
    private $width;

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function area()
    {
        return $this->height * $this->width;
    }
}
