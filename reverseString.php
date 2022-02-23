<?php
/**
 * Created by PhpStorm.
 * Author: wulinzhu
 * Email: 18515831680@163.com
 * Date: 2022/2/23 下午2:30
 * 反转字符串
 */

/**
 * @param $str
 * @return string
 */
function reverseStr($str) {
    $length = strlen($str);

    $ret = '';
    for ($i=1; $i<=$length; $i++) {
        $ret .= substr($str, -$i, 1);
    }
    return $ret;
}

$str = "hello world!";
$ret = reverseStr($str);
print_r($ret);