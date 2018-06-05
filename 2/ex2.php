<?php
function capitalize($str){
    $arr = explode(' ',$str);
    $res = [];
    foreach ($arr as $s)
        $res[] = ucfirst($s);
    return implode(' ', $res);
}

assert(capitalize('') === '');
assert(capitalize("How can mirrors be real if our eyes aren't real") === "How Can Mirrors Be Real If Our Eyes Aren't Real");
echo 'Done'.PHP_EOL;