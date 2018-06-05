<?php
/**
 * Created by PhpStorm.
 * User: Виктор
 * Date: 28.05.2018
 * Time: 21:54
 */
$str = $argv[1];
$i = $argv[2];
$j = $argv[3];

for($m = 0; $m < $j; $m++) {
    for ($k = 0; $k < strlen( $str ); $k++)
        for ($n = 0; $n < $i; $n++)
            echo $str[ $k ];
    echo PHP_EOL;
}