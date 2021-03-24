<?php
/*
 * @Description: 冒泡排序
 * @Author: XiaoAn
 * @Date: 2021-03-24 16:57:09
 * @LastEditTime: 2021-03-24 18:03:29
 * @LastEditors: XiaoAn
 */

 $arr = [1,56,3,5,2,35,12,66,20];

 function bubbleSort($arr = [])
 {
    $length = count($arr);
    var_dump($length);
    for ($i = 0; $i < $length; $i++) {
        for ($j = $i; $j < $length; $j++) {
            if ($arr[$i] > $arr[$j]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    return $arr;
 }

 $new_arr = bubbleSort($arr);
 var_dump($new_arr);