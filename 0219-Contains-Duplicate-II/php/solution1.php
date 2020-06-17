<?php
/// Source : https://leetcode.com/problems/contains-duplicate-ii/
/// Author : zcer
/// Time   : 2020-05-11

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer   $k
     * @return Boolean
     *
     * 时间复杂度: O(n)
     * 空间复杂度: O(n)
     */
    function containsNearbyDuplicate($nums, $k)
    {
        $keyArr = [];
        foreach ($nums as $key => $num) {
            if (isset($keyArr[$num]) && ($key - $keyArr[$num] <= $k)) {
                return true;
            }
            $keyArr[$num] = $key;
        }

        return false;
    }
}