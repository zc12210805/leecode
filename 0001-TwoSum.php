<?php
/**
 * Created by PhpStorm.
 * User: zhangc1
 * Date: 1/19/2020
 * Time: 3:58 PM
 */
class Solution {
    function twoSum($nums, $target) {
        for ($i = 0; $i < count($nums); $i++) {
            for ($j = $+1; $j < count($nums); $j++) {
                if ($nums[$j] == $target - $nums[$i]) {
                    $result = array($i, $j);
                    return $result;
                }
            }
        }
    }
}