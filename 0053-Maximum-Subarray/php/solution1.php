<?php
/// Source : https://leetcode.com/problems/maximum-subarray/
/// Author : zcer
/// Time   : 2019-01-09

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     *
     * 最优问题都可以利用动态规划的方法求解, 从头到尾遍历每一个数组元素，如何前面元素的和为正，则加上本元素的值继续搜索；如何前面元素的和为负，则此元素开始新的和计数。整个过程中要注意更新和的最大值
     * Time Complexity: O(n)
     * Space Complexity: O(1)
     */
    function maxSubArray($nums)
    {
        $max = $nums[0];
        $sum = $max;
        for ($i = 1; $i < count($nums); $i++) {
            if ($sum + $nums[$i] > $nums[$i]) {
                $sum += $nums[$i];
            } else {
                $sum = $nums[$i];
            }

            if ($max < $sum) {
                $max = $sum;
            }
        }
        return $max;
    }
}
