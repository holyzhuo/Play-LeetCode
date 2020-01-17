<?php
/// Source : https://leetcode.com/problems/contains-duplicate/
/// Author : zcer
/// Time   : 2019-01-17
///
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Boolean
     *
     * 使用HashMao
     * 时间复杂度: O(n)
     * 空间复杂度：O(n)
     */
    function containsDuplicate($nums)
    {
        $hashMap = [];
        foreach ($nums as $num) {
            // 注意：这里判断不能直接取$hashMap[$num],会超出内存限制，应使用isset()判断
            if (isset($hashMap[$num])) return true;
            $hashMap[$num] = true;
        }

        return false;
    }
}