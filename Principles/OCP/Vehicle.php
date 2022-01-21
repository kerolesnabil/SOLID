<?php


namespace SOLID\OCP;


abstract class Vehicle implements IVehicle
{

    /**
     * @var IMove
     */
    private $movable;

    /**
     * @var string
     */
    private $color;

    /**
     * @var string
     */

    private $maximumSpeed;

    /**
     * @var Driver
     */
    private $driver;

    /**
     * @var array
     */
    private $routes=[];

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param Driver $driver
     */
    public function setDriver(Driver $driver): void
    {
        $this->driver = $driver;
    }

    /**
     * @return Driver
     */
    public function getDriver(): Driver
    {
        return $this->driver;
    }

    /**
     * @return string
     */
    public function getMaximumSpeed(): string
    {
        return $this->maximumSpeed;
    }

    /**
     * @param string $maximumSpeed
     */
    public function setMaximumSpeed(string $maximumSpeed): void
    {
        $this->maximumSpeed = $maximumSpeed;
    }

    /**
     * @param array $routes
     */
    public function setRoutes(array $routes): void
    {
        $this->routes = $routes;
    }

    /**
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }


    /**
     * @param IMove $movable
     */
    public function setMovable(IMove $movable): void
    {
        $this->movable = $movable;
    }

    /**
     * @return IMove
     */
    public function getMovable(): IMove
    {
        return $this->movable;
    }

    public function move():string
    {
        return $this->getMovable()->move();
    }


}