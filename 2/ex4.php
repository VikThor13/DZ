<?php
function palendrom($str){
	$str1 = implode('', preg_split('/[-,!\s]/',  strtolower($str), 0,PREG_SPLIT_NO_EMPTY));
	return $str1 == strrev($str1);
}

assert(palendrom('') === True);
assert(palendrom("How can mirrors be real if our eyes aren't real") === False);
assert(palendrom('A but tuba') === True);
assert(palendrom('A man, a plan, a cat, a ham, a yak, a yam, a hat, a canal-Panama!') === True);
echo 'Done'.PHP_EOL;