<?php
/**
 * Created by PhpStorm.
 * Author: wulinzhu
 * Email: 18515831680@163.com
 * Date: 2022/2/26 下午6:05
 *
 * 最长无重复子数组 废了
 *
 */

/**
 * @param $arr
 * @return array
 */
function maxLength($arr) {
    $ret = [];
    for ($i=0; $i<count($arr); $i++) {
        $data[$i] = array_slice($arr, 0, $i);
        if ($data[$i]) {
            if (in_array($arr[$i], $data[$i-1])) {
                unset($data[$i-1]);
                break;
            }
        }
    }
    print_r($data);
    return $ret;
}

$ret = maxLength(["b", "a", "b", "c", "c", "d"]);
//print_r($ret);