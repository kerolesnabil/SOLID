<?php

namespace SOLID\OCP;


class Bus extends Vehicle
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
    private $doors;

    public function __construct($busNumber)
    {
        $this->setBusNumber($busNumber);
    }

    /**
     * @param int $busNumber
     */
    public function setBusNumber(int $busNumber): void
    {
        $this->busNumber = $busNumber;
    }

    /**
     * @return int
     */
    public function getBusNumber(): int
    {
        return $this->busNumber;
    }

    /**
     * @param string $doors
     */
    public function setDoors(string $doors): void
    {
        $this->doors = $doors;
    }

    /**
     * @return string
     */
    public function getDoors(): string
    {
        return $this->doors;
    }

    /**
     * @param int $numberOfPassenger
     */
    public function setNumberOfPassenger(int $numberOfPassenger): void
    {
        $this->numberOfPassenger = $numberOfPassenger;
    }

    /**
     * @return int
     */
    public function getNumberOfPassenger(): int
    {
        return $this->numberOfPassenger;
    }

    public function doMaintenance()
    {
        return 'the bus is doing maintenance right now';
    }








}