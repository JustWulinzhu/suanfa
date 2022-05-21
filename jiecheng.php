<?php
//求阶乘 求一个数的阶乘，例如 1的阶乘是1，2的阶乘是1*2，3的阶乘是1*2*3=6，4的阶乘是1*2*3*4=24；

function multi($n) {
    $i = 1;
    $num = 1;
    while ($n >= $i) {
        $num = $num * $i;
        $i++;
    }
    return $num;
}

$ret = multi(10);
echo "<pre>";
print_r($ret);