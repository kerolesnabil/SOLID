<?php
/**
 * Created by PhpStorm.
 * User: kero
 * Date: 22/11/21
 * Time: 02:02
 */

namespace SOLID\ISP;


class Car implements Vehicle,Speedable,Entertainment
{

    public function accelerate()
    {
        echo ' I can accelerate up to 200Km/h';
    }
    public function move()
    {
     echo 'T am moving';
    }
    public function musicPlay()
    {
        echo 'musicPlay';
    }
    public function pause()
    {
        echo 'pause';
    }
    public function stop()
    {
        echo 'stop';
    }
    public function rewind()
    {
        echo 'rewind';
    }

}