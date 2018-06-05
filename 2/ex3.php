<?php
function minimal_len($str){
    $arr = explode(' ',$str);
    $res = [];
    foreach ($arr as $s)
        $res[] = strlen($s);
    return min($res);
}

assert(minimal_len('') === 0);
assert(capitalize("How can mirrors be real if our eyes aren't real") === 2);
echo 'Done'.PHP_EOL;