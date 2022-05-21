<?php
/**
 * 二分查找（折半查找）
 * 时间复杂度 O(log2n)
 * 假设有n个数 ，查找的过程依次是：n/2, n/4，n/8 ... 直到 等于1的时候代表找到目标数了，
 * 所以假设x是查找的次数，(1/2)的x次方 乘以n 等于 1, 得出x = log2N，以2为底 N的对数，也记作logN
 *
 * 二分查找的前提是被查找的是一个有序数列
 * Mysql 索引B+树单点的遍历查询就是采用了二分查找算法
 */

function binarySearch($arr, $target) {
    if (empty($arr)) {
        return -1;
    }

    $start = 0;
    $end = count($arr) - 1;
    while ($start <= $end) {
        $middle = intval(($start + $end) / 2);
        if ($arr[$middle] > $target) {
            $end = $middle - 1;
        } elseif ($arr[$middle] < $target) {
            $start = $middle + 1;
        } else {
            return $middle;
        }
    }

    return -1;
}

function binarySearch2($sort_arr, $target) {
    $start = 0;
    $end = count($sort_arr) - 1;
    while ($start <= $end) {
        $middle = intval(($start + $end) / 2);
        if ($sort_arr[$middle] > $target) {
            $end = $middle - 1; //-1是因为$middle已经比较过了
        } else if ($sort_arr[$middle] < $target) {
            $start = $middle + 1;
        } else {
            return $middle;
        }
    }
    return -1;
}

$arr = [11, 22, 33, 44, 55, 66, 77];
$ret = binarySearch2($arr, 99);
print_r($ret);