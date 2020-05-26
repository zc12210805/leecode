<?php
/**
 * Created by PhpStorm.
 * User: zhangc1
 * Date: 5/26/2020
 * Time: 9:41 AM
 */
function quickSort($arr) {
    if (count($arr) <=1) {
        return $arr;
    }

    $left = array();
    $right = array();

    $middle = $arr[0];

    for ($i=1; $i<count($arr); $i++) {
        if ($middle<$arr[$i]) {
            $right[] = $arr[$i];
        } else {
            $left[] = $arr[$i];
        }
    }

    $left = quickSort($left);
    $right = quickSort($right);

    return array_merge($left, array($middle), $right);
}

$arr = array(2,13,42,34,56,23,67,365,87665,54,68,3);
print_r(quickSort($arr));