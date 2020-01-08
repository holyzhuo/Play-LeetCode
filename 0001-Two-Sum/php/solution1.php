<?php
/// Source : https://leetcode.com/problems/two-sum/description/
/// Author : zcer
/// Time   : 2019-01-08

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer   $target
     * @return Integer[]
     *
     *  暴力枚举
     *  Time Complexity: O(n^2)
     *  Space Complexity: O(1)
     */
    function twoSum($nums, $target)
    {
        for ($i = 0; $i < count($nums); $i++) {
            for ($j = $i + 1; $j < count($nums); $j++) {
                if ($nums[$i] + $nums[$j] == $target) {
                    return [$i, $j];
                }
            }
        }
    }
}