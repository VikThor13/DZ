<?php
/**
 * Created by PhpStorm.
 * User: Виктор
 * Date: 28.05.2018
 * Time: 22:01
 */
$n = $argv[1];
$tower = [];
for($i = 0, $j = 1; $i < $n; $i++, $j += 2){
    $str = "";
    for ($k = 0; $k < $n - $i -1; $k++)
        $str .= ' ';
    for ($k = 0; $k < $j; $k++)
        $str .= '*';
    for ($k = 0; $k < $n - $i -1; $k++)
        $str .= ' ';
    $tower[] = "$str\n";
}

for($i = 0; $i < $n; $i++)
    echo $tower[$i];
