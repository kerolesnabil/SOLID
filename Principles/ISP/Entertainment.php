<?php
/**
 * Created by PhpStorm.
 * User: kero
 * Date: 22/11/21
 * Time: 02:11
 */

namespace SOLID\ISP;


interface Entertainment
{

    public function musicPlay();
    public function pause();
    public function rewind();

}