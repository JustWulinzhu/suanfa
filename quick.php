<?php
/**
 * @param $arr
 * @return array|mixed
 * 快速排序
 * 选择一个基准
 */

function quick($arr) {
    if (count($arr) <= 1) {
        return $arr;
    }

    $base = $arr[0];
    $left = [];
    $right = [];
    for ($i=1; $i<count($arr); $i++) {
        if ($arr[$i] > $base) {
            $right[] = $arr[$i];
        } else {
            $left[] = $arr[$i];
        }
    }
    $right = quick($right);
    $left = quick($left);

    return array_merge($left, [$base], $right);
}

$arr = [3,6,8,2,9,1];
$ret = quick($arr);
echo "<pre>";
print_r($ret);