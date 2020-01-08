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
     *  因为两个数有对称关系，所以遍历到第二个数的时候，去map中找第一个数
     *  Time Complexity: O(n)
     *  Space Complexity: O(n)
     */
    function twoSum($nums, $target)
    {
        $map = [];
        foreach ($nums as $k => $num) {
            $diff = $target - $num;
            // key不能等于自身
            if (isset($map[$diff])) {
                return [$map[$diff], $k];
            }
            $map[$num] = $k;
        }
    }
}