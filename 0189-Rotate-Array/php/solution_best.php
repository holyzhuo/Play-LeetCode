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
     * 通过3次反转部分元素实现，第一次全反转，第二次反转前K个，第三次反转k到最后的元素
     * 时间复杂度：O(n)
     * 空间复杂度: O(1)
     */
    function rotate(&$nums, $k)
    {
        $k %= count($nums);
        $this->reverse($nums, 0, count($nums) - 1);
        $this->reverse($nums, 0, $k - 1);
        $this->reverse($nums, $k, count($nums) - 1);
    }

    function reverse(&$nums, $start, $end)
    {
        while ($start < $end) {
            list($nums[$start], $nums[$end]) = [
                $nums[$end],
                $nums[$start],
            ];
            $start++;
            $end--;
        }
    }
}