<?php
/**
 * Created by PhpStorm.
 * User: kero
 * Date: 21/11/21
 * Time: 17:23
 */

namespace SOLID\LSP;


class Square extends Rectangle
{

    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
        $this->height = $width;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
        $this->width = $height;
    }
}