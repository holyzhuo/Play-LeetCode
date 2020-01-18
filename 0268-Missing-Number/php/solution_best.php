<?php
/// Source : https://leetcode.com/problems/missing-number/
/// Author : zcer
/// Time   : 2019-01-18
///
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     *
     * 利用等差数列求和公式 (a1+an)*n/2
     * 时间复杂度: O(n)
     * 空间复杂度: O(1)
     */
    function missingNumber($nums)
    {
        $sum = (1 + count($nums)) * count($nums) / 2;

        $hasSum = 0;
        for ($i = 0; $i < count($nums); $i++) {
            $hasSum += $nums[$i];
        }

        return $sum - $hasSum;
    }
}