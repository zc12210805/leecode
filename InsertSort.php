<?php
/**
 * Created by PhpStorm.
 * User: zhangc1
 * Date: 5/26/2020
 * Time: 10:41 AM
 */

function insertSort($arr) {
    for ($i=1; $i<count($arr); $i++) {
        $temp = $arr[$i];
        for ($j=$i-1; $j>=0; $j--) {
            if ($temp < $arr[$j]) {
                $arr[$j+1] = $arr[$j];
                $arr[$j] = $temp;
            } else {
                break;
            }
        }
    }
    return $arr;
}

$arr = [5,2,1,1,3,1,4];

print_r(insertSort($arr));