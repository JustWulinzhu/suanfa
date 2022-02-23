<?php
/**
 * 二分查找（折半查找）
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