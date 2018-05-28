<?php
/**
 * Created by PhpStorm.
 * User: Виктор
 * Date: 28.05.2018
 * Time: 17:40
 */
$nums = explode(',', $argv[1]);
echo $nums[0];
for($i = 0; $i < count($nums) - 1; $i++){
    do{
        echo ','.++$nums[$i];
    } while ( isset( $nums[ $i + 1 ] ) && $nums[ $i ] != $nums[ $i + 1 ] );
}