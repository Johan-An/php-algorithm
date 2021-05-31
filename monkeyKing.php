<?php
$arr = [1,2,3,4,5,6,7,8,9,10];

$king = monkeyKing($arr, 3);
$king_pos = array_intersect($arr, $king);

var_dump($king_pos);

function monkeyKing($arr, $num)
{
    if (empty($arr) || $num <= 0) {
        exit('wuwuwu');
    }
    $i = 1;
    while (count($arr) > 1) {
        if (($i % $num) == 0) {
            echo "第" . $arr[$i - 1] . '只被踢掉了' . PHP_EOL;
            unset($arr[$i - 1]);
        } else {
            array_push($arr, $arr[$i - 1]);
            unset($arr[$i - 1]);
        }
        $i++;
    }
    return $arr;
}
