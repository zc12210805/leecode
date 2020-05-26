<?php
/**
 * Created by PhpStorm.
 * User: zhangc1
 * Date: 5/26/2020
 * Time: 9:22 AM
 */


    function bubbleSort($arr) {
        for ($i=0; $i<count($arr); $i++) {
            for ($j=$i+1; $j<count($arr); $j++) {
                if ($arr[$i] < $arr[$j]) {
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }
        }
        return $arr;
    }

$arr = array(1,2,3,4,5,6,7);

print_r($arr);

echo '</br>';

$arr_after = bubbleSort($arr);

print_r($arr_after);