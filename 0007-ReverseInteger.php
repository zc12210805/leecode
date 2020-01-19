<?php
/**
 * Created by PhpStorm.
 * User: zhangc1
 * Date: 1/19/2020
 * Time: 4:47 PM
 */
class ReverseInter {
    function reverse($x) {
        $f = ($x<0)?true:false;
        $x = $f?abs($x):$x;
        $x = strval($x);

        $res = intval(strrev($x));
        $res = $f?-1*$res:$res;

        if ($res < -2147483648 || $res > 2147483647) {
            return 0;
        }
        return $res;
    }
}