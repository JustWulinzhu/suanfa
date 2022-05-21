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
 * 时间复杂度 O(2n) 2的n次方，斐波那契数列 和一颗二叉树结构一样， 算某个点需要知道前两个点的值，明显呈2的指数级别增长
 * 如果在递归的时候保存每一步得出的值，时间复杂度可以降到O(n)
 *
 */

class Fibonacci {

    public $arr = [];

    /**
     * @param $num
     * @return mixed
     */
    public function jump($num) {
        if ($num < 3) {
            return $num;
        }
        if (isset($this->arr[$num]) && $this->arr[$num] > 0) {
            return $this->arr[$num];
        }
        $this->arr[$num] = $this->jump($num - 1) + $this->jump($num - 2);
        return $this->arr[$num];
    }

}

/**
 * 记忆化搜索，每次递归把算出来的值保存下来，下次使用
 * 时间复杂度可降为O(n)
 * @param $num
 * @return int|mixed
 */
function jump($num) {
    global $ret; //声明全局变量
    if ($num < 3) {
        return $num;
    }
    if (isset($ret[$num])) {
        return $ret[$num];
    }
    $ret[$num] = jump($num - 1) + jump($num - 2);
    return $ret[$num];
}

$ret = jump(50);
print_r($ret);