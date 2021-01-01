<?php
declare(strict_types=1);

namespace myapp\solid\lsp\bad;

/**
 * 正方形
 * Class Square
 * @package myapp\solid\lsp\bad
 */
class Square extends Rectangle
{
    public function setHeight($height)
    {
        parent::setHeight($height);
        parent::setWidth($height);
    }

    public function setWidth($width)
    {
        parent::setWidth($width);
        parent::setHeight($width);
    }
}
