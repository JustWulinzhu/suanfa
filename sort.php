<?php
/**
 * Created by PhpStorm.
 * Author: wulinzhu
 * Email: 18515831680@163.com
 * Date: 2022/2/20 下午2:32
 *
 * 冒泡排序、快速排序、选择排序
 *
 */

class Sort {

    /**
     * 冒泡排序
     * 时间复杂度 O(n²)
     * 在要排序的一组数中，对当前还未排好的序列，从前往后对相邻的两个数依次进行比较和调整，让较大的数往下沉，往后排，每一轮对比会找到一个最大的数放到最后，
     * 第二轮对比的数字就会比第一轮少一个，因为第一轮已经找到一个最大的数了，不需要再进行排序了，依次类比
     * 即，对一组数据，比较相邻数据的大小，把小的数据放在前面，值大的放在后面(升序排序)
     * @param $arr
     * @return mixed
     */
    public function bubble($arr) {
        $lenght = count($arr);
        for ($i = 0; $i < $lenght; $i++) { //控制排序的轮次，需要循环几次去排序, 意思就是有几个数字就需要去循环$lenght-1次
            for ($j = 0; $j < $lenght-$i-1; $j++) { //控制每轮比较几次，相邻的两个数字依次比较，逐步后移，每一轮比较次数减一。第一轮需要比较4次，第二轮3次。。。
                if ($arr[$j] > $arr[$j+1]) { //如果前一个数字币后一个数字大的话就交换两个数的值
                    $tmp = $arr[$j+1];
                    $arr[$j+1] = $arr[$j];
                    $arr[$j] = $tmp;
                }
            }
        }

        return $arr;
    }

    /**
     * 快速排序 时间复杂度O(n)
     * 选择一个基准元素，通常选择第一个元素或者最后一个元素。通过一趟扫描，将待排序列分成两部分，一部分比基准元素小，
     * 一部分大于等于基准元素。此时基准元素在其排好序后的正确位置，然后再用同样的方法递归地排序划分的两部分。
     * 总结：就是选一个基准数，把数据分成2部分，然后递归的操作。
     * @param $arr
     * @return mixed
     */
    public function quick($arr) {
        if (count($arr) <= 1) {
            return $arr;
        }

        $base = $arr[0];
        $left = [];
        $right = [];
        for ($i=1; $i<count($arr); $i++) {
            if ($arr[$i] > $base) {
                $right[] = $arr[$i];
            } else {
                $left[] = $arr[$i];
            }
        }

        $left = $this->quick($left);
        $right = $this->quick($right);

        return array_merge($left, [$base], $right);
    }

    /**
     * 选择排序
     * 时间复杂度O(n²)
     * 在要排序的一组数中，选出最小的一个数与第一个位置的数交换。
     * 然后在剩下的数当中再找最小的与第二个位置的数交换，如此循环到倒数第二个数和最后一个数比较为止。
     * @param $arr
     * @return array|mixed
     */
    public function select($arr) {
        if (! $arr) {
            return [];
        }
        for ($i=0; $i<count($arr); $i++) {
            $p = $i;
            for ($j=$i+1; $j<count($arr); $j++) {
                if ($arr[$p] > $arr[$j]) {
                    $p = $j;
                }
            }
            if ($p != $i) {
                $tmp = $arr[$p];
                $arr[$p] = $arr[$i];
                $arr[$i] = $tmp;
            }
        }
        return $arr;
    }

}

$sort = new Sort();

$arr = [3, 2, 4, 5, 1];
$sorted = $sort->bubble($arr);
echo "<pre>";print_r($sorted);