<?php
// $arr = [2,3,1,2];
$arr = [2,3,1,2,1,4,7,2,3,4,2,1,3,8,9,10,33,22,-1,3,2,0,7];

// ：["2,3,4,7,8,9,10,33","2,3,4,7,8,9,10,22","1,2,4,7,8,9,10,33","1,2,4,7,8,9,10,22","1,2,3,4,8,9,10,33","1,2,3,4,8,9,10,22"]
$length = count($arr);
$new_arr = [];

for ($i = 0; $i < $length; $i++) {
	$son_arr = [$arr[$i]];
	$max = $arr[$i];
	for($j = $i; $j< $length-1;$j++) {
		if ($max < $arr[$j+1]) {
			$max = $son_arr[] = $arr[$j+1];
		} else {
			continue;
		}
	}
	$new_arr[] = $son_arr;
}

$max_length = 0;
foreach ($new_arr as $key => $value) {
	$length = count($value);
	if ($max_length <= $length) {
		$max_length = $length;
	}
}

$max_arr = [];
foreach ($new_arr as $value) {
	$length = count($value);
	if ($length == $max_length) {
		$max_arr[] = $value;
	}
}
var_dump($max_arr);

for ($i = 0; $i < $length; $i++) {
	$son_arr = [$arr[$i]];
	$max = $arr[$i];
	for($j = $i; $j< $length-1;$j++) {
		if ($max < $arr[$j+1]) {
			$max = $son_arr[] = $arr[$j+1];
		} else {
			continue;
		}
	}
	$new_arr[] = $son_arr;
}

for ($i = 0; $i < $length; $i++) {
	$bigger = find_bigger($arr, $i, $bigger = []);
}

function find_bigger($arr, $j, $bigger = [])
{
	for ($i = $j; $i < $length; $i++) {
		if ($arr[$j] < $arr[$i]) {
			$bigger[] = $arr[$i];
		}
	}
	return $bigger;
}
