<?php
/*
 * @Description: 二分法
 * @Author: XiaoAn
 * @Date: 2021-03-24 17:36:29
 * @LastEditTime: 2021-03-24 19:20:55
 * @LastEditors: XiaoAn
 */
$arr = [1,2,3,5,12,20,35,56,66,77,81];

function binarySearch($arr, $target, $start = 0, $end = false)
{
    if ($end === false) {
        $end = count($arr) - 1;
    }
    if ($start >= $end) {
        return false;
    }
    $middle = ceil(($start + $end) / 2);
    if ($arr[$middle] > $target) {
        var_dump(json_encode([$middle]));
        $key = binarySearch($arr, $target, $start, $middle - 1);
    } elseif ($arr[$middle] < $target) {
        $key = binarySearch($arr, $target, $middle, $end);
    } else {
        $key = $middle;
    }
    return $key;
}

function binarySearch1($arr, $target)
{
    $low = 0;
    $high = count($arr) - 1;
    while($low <= $high) {
        $middle = ceil(($low + $high) / 2);
        if ($arr[$middle] > $target) {
            $high = $middle - 1;
        } elseif ($arr[$middle] < $target) {
            $low = $middle + 1;
        } else {
            return $middle;
        }
    }
    return false;
}

$key = binarySearch1($arr, 81);
var_dump($key);
var_dump($arr);
