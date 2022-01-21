<?php


namespace SOLID\LSP;


class Rectangle
{
    /**
     * @var int
     */
    protected $width;
    /**
     * @var int
     */
    protected $height;


    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    public function calculateArea()
    {
      return  $this->getWidth()*$this->getHeight();
    }

}