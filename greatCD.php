<?php
/**
 * Created by PhpStorm.
 * Author: wulinzhu
 * Email: 18515831680@163.com
 * Date: 2022/2/23 下午2:57
 * 求最大公约数
 */

function greatCD($num1, $num2) {
    if ($num1 == $num2) {
        return $num1;
    }
    while ($num1 - $num2 != 0) {
        if ($num1 > $num2) {
            $num1 = $num1 - $num2;
        } else {
            $num2 = $num2 - $num1;
        }
    }
    return $num1;
}

$ret = greatCD(8, 18);
print_r($ret);