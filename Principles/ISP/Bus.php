<?php
/**
 * Created by PhpStorm.
 * User: kero
 * Date: 22/11/21
 * Time: 02:02
 */

namespace SOLID\ISP;


class Bus implements Vehicle,Speedable,Entertainment
{


    public function move()
    {
     echo 'T am moving';
    }
    public function pause()
    {
        echo 'pause';
    }
    public function stop()
    {
        echo 'stop';
    }
    public function accelerate()
    {
        // TODO: Implement accelerate() method.
    }

    public function rewind()
    {
        echo 'rewind';
    }
    public function musicPlay()
    {
        echo 'musicPlay';
    }

}