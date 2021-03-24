<?php
/*
 * @Description: 快速排序
 * @Author: XiaoAn
 * @Date: 2021-03-24 17:04:53
 * @LastEditTime: 2021-03-24 18:03:40
 * @LastEditors: XiaoAn
 */
$arr = [1,56,3,5,2,35,12,66,20];

function quickSort($arr)
{
    $length = count($arr);
    if ($length <= 1) {
        return $arr;
    }
    $middle = ceil($length / 2);
    $left = [];
    $right = [];
    for ($i = 0; $i < $length; $i++) {
        if ($arr[$i] > $arr[$middle]) {
            $right[] = $arr[$i];
        } elseif ($arr[$i] < $arr[$middle]) {
            $left[] = $arr[$i];
        }
    }
    $left  = quickSort($left);
    $right = quickSort($right);
    $new_arr = array_merge($left, [$arr[$middle]], $right);
    return $new_arr;
}

$new_arr = quickSort($arr);
var_dump(json_encode($new_arr));