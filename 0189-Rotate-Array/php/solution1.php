<?php
/// Source : https://leetcode.com/problems/rotate-array/
/// Author : zcer
/// Time   : 2019-01-19

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer   $k
     * @return NULL
     *
     * 出栈O(1)，然后头插入O(n)
     * 时间复杂度：O(n * k)
     * 空间复杂度: O(1)
     */
    function rotate(&$nums, $k)
    {
        for ($i = 0; $i < $k; $i++) {
            array_unshift($nums, array_pop($nums));
        }
    }
}