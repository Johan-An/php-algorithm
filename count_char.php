<?php
$str = "aadfadf";
$char = "a";

function countChar($char,$str)
{
    // $arr = str_split($str);
    $arr = preg_split('/(?<!^)(?!$)/u', $str);
    var_dump($arr);
}
countChar($char, $str);