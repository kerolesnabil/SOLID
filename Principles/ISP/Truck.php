<?php
/**
 * Created by PhpStorm.
 * User: kero
 * Date: 22/11/21
 * Time: 02:02
 */

namespace SOLID\ISP;


class Truck implements Vehicle,Heavy
{

    public function move()
    {
     echo 'T am moving';
    }
    public function stop()
    {
        // TODO: Implement stop() method.
    }

    public function caryHeavyCargo()
    {
        echo 'caryHeavyCargo';
    }

}