<?php

namespace SOLID\SRP;


class Bus
{

    /**
     * @var int
     */
    private $busNumber;
    /**
     * @var int
     */
    private $numberOfPassenger;
    /**
     * @var string
     */
    private $color;
    /**
     * @var int
     */
    private $maximumSpeed;
    /**
     * @var string
     */

    private $doors;

    /**
     * @var Driver
     */

    private $driver;
    /**
     * @var array
     */
    private $routes=[];

    public function __construct($busNumber)
    {
        $this->setBusNumber($busNumber);
    }

    public function getNumberOfPassenger():int
    {
       return $this->numberOfPassenger;
    }

    public function setNumberOfPassenger($numberOfPassenger)
    {
        $this->numberOfPassenger=$numberOfPassenger;
    }

    public function getColor():string
    {
       return $this->color;
    }

    public function setColor($color)
    {
        $this->color=$color;
    }

    public function getMaximumSpeed():string
    {
       return $this->maximumSpeed.'k/h';
    }

    public function setMaximumSpeed($maximumSpeed)
    {
        $this->maximumSpeed=$maximumSpeed;
    }


    public function getDoors($doors)
    {
        $this->doors=$doors;
    }

    public function setDoors($doors)
    {
       return $this->doors=$doors;
    }

    /**
     * @param Route $routes
     */
    public function addRoutes(Route $routes): void
    {
        $this->routes[] = $routes;
    }

    public function getRoutes():array
    {
        return $this->routes;
    }

    public function getBusNumber():int
    {
        return $this->busNumber;
    }

    public function setBusNumber($busNumber)
    {
         $this->busNumber=$busNumber;
    }

    public function driverToRoute($from,$to)
    {
        return 'the bus is moving from '.$from.' to '.$to;
    }


    public function setDriver(Driver $driver ):void
    {
        $this->driver=$driver;
    }

    public function getDriver( ):Driver
    {
        return $this->driver;
    }

    public function doMaintenance()
    {
        return 'the bus is doing maintenance right now';
    }
    public function move() :string
    {
        $output='';

        foreach ($this->getRoutes() as $route)
        {



            $output.= '<p> I am moving now from '
                .$route->getSource() .' to '
                .$route->getDestination().
                ' at a maximnm speed of '.$route->getDistance().
                ' the driver is: '.$this->getDriver()->getName().
                '</p>';
        }
        return $output;
    }





}