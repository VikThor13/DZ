<?php
function custom_arr_summ(array $arr){
    if (!count($arr))
        return 0;
    $sum = array_sum($arr);
    $max = max($arr);
    $min = min($arr);
    return $sum - $max - $min;
}

assert(custom_arr_summ(array()) === 0);
assert(custom_arr_summ([1, 2, 3]) === 2);
echo 'Done'.PHP_EOL;