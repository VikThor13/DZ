<?php
function revertChars($str){
    $arr = explode(' ',$str);
    $res = [];
    foreach ($arr as $s)
       $res[] = strrev($s);
    return implode(' ', $res);
}

assert(revertChars('') === '');
assert(revertChars(' A fun little challenge! ') === ' A nuf elttil !egnellahc ');
echo 'Done'.PHP_EOL;