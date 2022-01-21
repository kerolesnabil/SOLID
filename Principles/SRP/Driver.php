<?php

namespace SOLID\SRP;

class Driver
{
    /**
     * @var string
     */
    private  $name;
    private  $age;
    private  $insuranceNumber;
    private  $address;

    public function __construct( string $name, int $age, string $insuranceNumber, string $address)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setInsuranceNumber($insuranceNumber);
        $this->setAddress($address);
    }


    public function setName($name):void
    {
        $this->name=$name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function setAge($age):void
    {
        $this->age=$age;
    }
    public function getAge():int
    {
        return $this->age;
    }

    public function setInsuranceNumber($insuranceNumber):void
    {
        $this->insuranceNumber=$insuranceNumber;
    }
    public function getInsuranceNumber():int
    {
        return $this->insuranceNumber;
    }


    public function setAddress($address):void
    {
        $this->address=$address;
    }
    public function getAddress():int
    {
        return $this->address;
    }





}