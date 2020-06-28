<?php
/// Source : https://leetcode.com/problems/intersection-of-two-arrays-ii/
/// Author : zcer
/// Time   : 2020-06-28
///
class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     *
     * 时间复杂度: O(n)
     * 空间复杂度: O(n)
     */
    function intersect($nums1, $nums2)
    {
        $hashTable = [];
        foreach ($nums1 as $v) {
            $hashTable[$v]++;
        }

        $res = [];
        foreach ($nums2 as $v) {
            if ($hashTable[$v] > 0) {
                $res[] = $v;
                $hashTable[$v]--;
            }
        }
        return $res;
    }
}