<?php
/**
 * Created by PhpStorm.
 * Author: wulinzhu
 * Email: 18515831680@163.com
 * Date: 2022/2/26 下午3:59
 * 青蛙跳台阶问题
 * 一只青蛙一次可以跳上1级台阶，也可以跳上2级。求该青蛙跳上一个n级的台阶总共有多少种跳法（先后次序不同算不同的结果）
 *
 * 1级 1种
 * 2级 2种
 * 3级 3种
 * 4级 5种
 * 5级 8种
 *
 * f(n) = f(n-1) + f(n-2)
 *
 * 斐波那契数列应用
 *
 */

/**
 * @param $num
 * @return mixed
 */
function jump($num) {
    if ($num < 3) {
        return $num;
    }

    return jump($num - 1) + jump($num - 2);
}

$ret = jump(10);
print_r($ret);