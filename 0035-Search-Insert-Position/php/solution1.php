<?php
/// Source : https://leetcode.com/problems/search-insert-position/
/// Author : zcer
/// Time   : 2019-01-09

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer   $target
     * @return Integer
     *
     *  二分查找
     *  Time Complexity: O(log2(n))
     *  Space Complexity: O(1)
     */
    function searchInsert($nums, $target)
    {
        $begin = 0;
        $end   = count($nums);
        while (true) {
            $key = (int)(($end + $begin) / 2);
            if ($nums[$key] == $target) {
                return $key;
            }

            if ($nums[$key] > $target) {
                if ($begin == $key) return $begin;
                $end = $key;
            }

            if ($nums[$key] < $target) {
                if ($begin == $key) return $begin + 1;
                $begin = $key;
            }
        }
    }
}