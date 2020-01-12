<?php
/// Source : https://leetcode.com/problems/majority-element/
/// Author : zcer
/// Time   : 2019-01-12

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     *
     * 使用HashMap的思想
     * 时间复杂度: O(n)
     * 空间复杂度: O(n)
     */
    function majorityElement($nums)
    {
        $limit = (int)(count($nums) / 2);
        $map   = [];
        foreach ($nums as $num) {
            if ($map[$num] + 1 > $limit) {
                return $num;
            }
            $map[$num]++;
        }
    }
}