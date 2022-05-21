<?php
/**
 * @param $arr
 * @return mixed
 * 冒泡排序
 */
function bubble($arr) {
    $count = count($arr);

    for ($i=0; $i<$count; $i++) { //对比轮次，N-1次，每轮排出一个最大值排到最后
        for ($j=0; $j<$count-$i-1; $j++) { //内层相邻之间对比，6个数对比5次，5个数对比4次，第一轮$i=0,需要对比5次，所以是6-0-1
            if ($arr[$j] > $arr[$j+1]) { //前一个比后一个大
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $tmp;
            }
        }
    }
    return $arr;
}

$arr = [3,6,8,2,9,1];
$ret = bubble($arr);
echo "<pre>";
print_r($ret);