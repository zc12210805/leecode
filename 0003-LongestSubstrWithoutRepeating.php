<?php
/**
 * Created by PhpStorm.
 * User: zhangc1
 * Date: 1/22/2020
 * Time: 9:56 AM
 */
class longestSubstrWithoutRepeating {
    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $max = 0;
        $current = '';
        $len=$i=0;
        for (; $i < strlen($s); $i++) {
            if (strpos($current, $s[$i]) !== false) {
                $current = substr($current, strpos($current, $s[$i])+1);
                $len = strlen($current);
            }
            $current .= $s[$i];
            $len++;
            $max = max($max, $len);
        }

        return $max;
    }
}