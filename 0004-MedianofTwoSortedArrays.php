<?php
/**
 * Created by PhpStorm.
 * User: zhangc1
 * Date: 1/22/2020
 * Time: 2:32 PM
 */
class medianofTwoSortedArrays {
    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        if (count($nums1) > count($nums2)) {
            $this->findMedianSortedArrays($nums2, $nums1);
        }

        $x = count($nums1);
        $y = count($nums2);
        $low = 0;
        $high = $x;

        while ($low <= $high) {
            $partitionX = floor(($low + $high) / 2);
            $partitionY = floor(($x + $y + 1) / 2 - $partitionX);

            $maxLeftX = ($partitionX == 0) ? PHP_INT_MIN : $nums1[$partitionX - 1];
            $maxLeftY = ($partitionY == 0) ? PHP_INT_MIN : $nums2[$partitionY - 1];

            $minRightX = ($partitionX == $x) ? PHP_INT_MAX : $nums1[$partitionX];
            $minRightY = ($partitionY == $y) ? PHP_INT_MAX : $nums2[$partitionY];

            if ($maxLeftX <= $minRightY && $maxLeftY <= $minRightX) {
                if (($x + $y) % 2 == 0) {
                    return (max($maxLeftX, $maxLeftY) + min($minRightX, $minRightY)) / 2;
                } else {
                    return max($maxLeftX, $maxLeftY);
                }
            } elseif ($minRightX <= $maxLeftY) {
                $low = $partitionX + 1;
            } else {
                $high = $partitionX - 1;
            }
        }
    }
}