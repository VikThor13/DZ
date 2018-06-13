<?php
/**
 * Created by PhpStorm.
 * User: Виктор
 * Date: 13.06.2018
 * Time: 10:43
 * @param $year
 * @return false|string
 */

function isLeap($year)
{
    return date("L", mktime(0,0,0, 7,7, $year));
}

echo isLeap(2016);