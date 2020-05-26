<?php
/**
 * Created by PhpStorm.
 * User: zhangc1
 * Date: 5/26/2020
 * Time: 10:02 AM
 */

function selectSort($arr) {
    for ($i=0; $i<count($arr)-1; $i++) {
        $min=$i;
        for ($j=$i+1; $j<count($arr); $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }

        if ($i!=$min) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $temp;
        }
    }
    return $arr;
}

$arr = [5,2,1,1,3,1,4];
print_r(selectSort($arr));