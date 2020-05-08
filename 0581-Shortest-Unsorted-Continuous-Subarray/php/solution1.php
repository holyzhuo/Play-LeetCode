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
     * 从后往前遍历，每个值和 当前k到末尾的所有元素判断
     * 时间复杂度: O(n2)
     * 空间复杂度: O(1)
     */
    function findUnsortedSubarray($nums)
    {
        $begin = -1;
        $end   = -1;
        for ($i = count($nums) - 2; $i >= 0; $i--) {
            for ($j = count($nums) - 1; $j > $i; $j--) {
                if ($nums[$i] > $nums[$j]) {
                    if ($j > $begin) $begin = $j;
                    $end = $i;
                    break;
                }
            }

        }

        if ($begin == -1) {
            return 0;
        }

        return (integer)($begin - $end + 1);
    }
}