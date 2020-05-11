<?php
/// Source : https://leetcode.com/problems/third-maximum-number/
/// Author : zcer
/// Time   : 2020-05-11

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     *
     * 3个变量，从大到小存储
     * 时间复杂度: O(n)
     * 空间复杂度: O(1)
     */
    function thirdMax($nums)
    {
        list($max, $middle, $min) = [null, null, null,];
        foreach ($nums as $v) {
            if ($v > $max || is_null($max)) {
                $min    = $middle;
                $middle = $max;
                $max    = $v;
            } else if ($v < $max && ($v > $middle || is_null($middle))) {
                $min    = $middle;
                $middle = $v;
            } else if ($v < $middle && ($v > $min || is_null($min))) {
                $min = $v;
            }
        }

        if (is_null($max) || is_null($middle) || is_null($min)) {
            return $max;
        }

        return $min;
    }
}