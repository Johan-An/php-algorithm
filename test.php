<?php
// $illegal_str = '/[<>&\'\"\/\\\]/';

// $str = "一";

// $result = preg_match_all($illegal_str, $str, $matches);

// var_dump($result);
// echo PHP_EOL;
// var_dump($matches);

// echo mb_strlen("一二三四五/");
//

$arr1 = [1,22];
$arr2 = ["22", 3];
$arr3 = [[1,3],[2,4]];
// var_dump(array_intersect($arr1, $arr2));
// var_dump(array_merge($arr3, $arr2));
// var_dump(0 == 'foobar');
// var_dump('foobar' == 0);
// var_dump('01foobar' == '1');
// var_dump('0134foobar' == 134);
// echo 4 / 2;
// echo 4 / -2;
// list($jishu, $oushu) = $arr3;
// var_dump($jishu);
// var_dump($oushu);

$existed = [];
$new = [2,4,6,8];

$diff1 = array_diff($existed, $new);
$diff2 = array_diff($new, $existed);

var_dump($diff1);
var_dump($diff2);

var_dump(rad2deg(asin(0.5)));