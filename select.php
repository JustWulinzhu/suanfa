<?php
/**
 * @param $arr
 * @return array
 * 选择排序
 */
function select($arr) {
    while (true) {
        $min_arr = getMin($arr);
        $data[] = $min_arr['value'];
        unset($arr[$min_arr['key']]);
        $arr = array_values($arr);
        if (empty($arr)) {
            break;
        }
    }
    return $data;
}

//选取数组中最小值
function getMin($arr) {
    $min = $arr[0];
    $min_arr = [
        'key' => 0,
        'value' => $min
    ];
    for ($i=0; $i<count($arr); $i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
            $min_arr = [
                'key' => $i,
                'value' => $min
            ];
        }
    }
    return $min_arr;
}

$arr = [3,6,8,2,9,1];
$ret = select($arr);
echo "<pre>";
print_r($ret);