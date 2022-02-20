<?php
/**
 * Created by PhpStorm.
 * Author: wulinzhu
 * Email: 18515831680@163.com
 * Date: 2022/2/20 下午2:32
 *
 * 冒泡排序
 *
 */

class Sort {

    /**
     * 冒泡排序
     * @param $arr
     * @return mixed
     */
    public function maopao($arr) {
        $lenght = count($arr);
        for ($i = 0; $i < $lenght; $i++) { //控制排序的次数，需要循环几次去排序, 意思就是有几个数字就需要去循环$lenght-1次
            for ($j = 0; $j < $lenght-$i-1; $j++) { //控制每轮比较几次， 相邻的两个数字依次比较，逐步后移
                if ($arr[$j] > $arr[$j+1]) { //如果前一个数字币后一个数字大的话就交换两个数的值
                    $tmp = $arr[$j+1];
                    $arr[$j+1] = $arr[$j];
                    $arr[$j] = $tmp;
                }
            }
        }

        return $arr;
    }

}

$sort = new Sort();

$arr = [3, 2, 4, 5, 1];
$sorted = $sort->maopao($arr);
echo "<pre>";print_r($sorted);