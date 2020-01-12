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
     * 使用Boyer-Moore Voting(摩尔投票)算法，将不同的数字两两相消，消剩下的就肯定是大于1/2了
     * 时间复杂度: O(n)
     * 空间复杂度: O(1)
     */
    function majorityElement($nums)
    {
        $count     = 0;
        $candidate = 0;
        foreach ($nums as $num) {
            if ($count == 0) {
                $candidate = $num;
            }

            $count += ($num == $candidate) ? 1 : -1;
        }
        return $candidate;
    }
}