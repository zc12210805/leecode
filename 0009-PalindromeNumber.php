<?php
/**
 * Created by PhpStorm.
 * User: zhangc1
 * Date: 1/20/2020
 * Time: 4:26 PM
 */
class PalindromeNumber {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if ($x == strrev($x)) {
            return true;
        }
        return false;
    }
}