<?php
/// Source : https://leetcode.com/problems/shortest-unsorted-continuous-subarray/
/// Author : zcer
/// Time   : 2019-05-08

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     *
     * 头尾同时遍历，最后一个比前面所有最大元素小的即为最右边，同理最前面一个比所有元素大的即为最左边
     * 时间复杂度: O(n)
     * 空间复杂度: O(1)
     */
    function findUnsortedSubarray($nums) {
        $len = count($nums);
        $max = $nums[0];
        $min = $nums[$len-1];
        for($i = 0; $i < $len; $i++) {
            $max = max($max, $nums[$i]);
            $min = min($min, $nums[$len-$i-1]);
            if($max != $nums[$i]) $right = $i;
            if($min != $nums[$len-$i-1]) $left = $len-$i-1;
        }
        return isset($right) ? $right - $left + 1 : 0 ;
    }
}