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
     * 使用hashMao存储
     * 时间复杂度: O(n)
     * 空间复杂度: O(n)
     */
    function missingNumber($nums)
    {
        $hashMap = [];
        foreach ($nums as $num) {
            $hashMap[$num] = true;
        }

        for ($i = 0; $i < count($nums) + 1; $i++) {
            if (!isset($hashMap[$i])) return $i;
        }
    }
}