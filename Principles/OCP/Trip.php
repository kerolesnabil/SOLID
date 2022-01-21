<?php

namespace SOLID\OCP;


class Trip
{
    /**
     * @var IVehicle
     */
    private $vehicle;
    /**
     * @var string
     */
    private $tripNumber;
    /**
     * @var float
     */
    private $tripPrice;
    /**
     * @var int time duration in minutes
     */
    private $duration;
    /**
     * Trip constructor.
     * @param vehicle $vehicle
     * @param string $tripNumber
     * @param float $tripPrice
     * @param int $duration
     */
    public function __construct(IVehicle $vehicle,string $tripNumber,float $tripPrice ,int $duration)
    {
        $this->setVehicle($vehicle);
        $this->setTripNumber($tripNumber);
        $this->setTripPrice($tripPrice);
        $this->setDuration($duration);

    }
    /**
     * @param IVehicle
     */
    public function setVehicle(IVehicle $vehicle): void
    {

        $this->vehicle = $vehicle;

    }

    /**
     * @return IVehicle
     */
    public function getVehicle():Ivehicle
    {
        return $this->vehicle;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @return string
     */
    public function getTripNumber(): string
    {
        return $this->tripNumber;
    }

    /**
     * @return float
     */
    public function getTripPrice(): float
    {
        return $this->tripPrice;
    }

    /**
     * @param int $duration
     */
    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    /**
     * @param string $tripNumber
     */
    public function setTripNumber(string $tripNumber): void
    {
        $this->tripNumber = $tripNumber;
    }
    /**
     * @param float $tripPrice
     */
    public function setTripPrice(float $tripPrice): void
    {
        $this->tripPrice = $tripPrice;
    }

    /**
     * @return string
     */
    public function move():string
    {
      return $this->vehicle->move();
    }


}