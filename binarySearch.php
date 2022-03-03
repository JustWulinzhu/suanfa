<?php
/**
 * 二分查找（折半查找）
 * 时间复杂度 O(log2n)
 * 假设有n个数 ，查找的过程依次是：n/2, n/4，n/8 ... 直到 等于1的时候代表找到目标数了，
 * 所以假设x是查找的次数，(1/2)的x次方 乘以n 等于 1, 得出x = log2n
 */

/**
 * @param $arr
 * @param $target
 * @return int
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

$arr = [11, 22, 33, 44, 55, 66, 77];
$ret = binarySearch($arr, 77);
print_r($ret);