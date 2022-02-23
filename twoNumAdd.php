<?php
/**
 * Created by PhpStorm.
 * Author: wulinzhu
 * Email: 18515831680@163.com
 * Date: 2022/2/23 上午11:18
 *
 * 两数之和
 *
 */

/**
 * 给出一个整型数组 arr 和一个目标值 target，请在数组中找出两个加起来等于目标值的数的下标，返回的下标按升序排列。
 *
 * @param $arr
 * @param $target
 * @return int|int[]
 */
function twoSum($arr, $target) {
    $i = 0;
    while (true) {
        if ($i > count($arr)) {
            break;
        }
        for ($j = $i + 1; $j <= count($arr) - 1; $j++) {
            if ($arr[$i] + $arr[$j] == $target) {
                return [
                    $i, $j
                ];
            }
        }

        $i++;
    }
    return -1;
}

$arr = [2, 6, 3, 5];
$ret = twoSum($arr, 9);
print_r($ret);