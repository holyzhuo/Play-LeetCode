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
     *  先生成字典，然后通过寻找字典中是否存在差值，来确定结果
     *  Time Complexity: O(n)
     *  Space Complexity: O(n)
     */
    function twoSum($nums, $target)
    {
        $map = [];
        foreach ($nums as $k => $num) {
            $map[$num] = $k;
        }

        foreach ($nums as $k => $num) {
            $diff = $target - $num;
            // key不能等于自身
            if (isset($map[$diff]) && $map[$diff] != $k) {
                return [
                    $k,
                    $map[$diff],
                ];
            }
        }
    }
}