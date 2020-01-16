<?php
/// Source : https://leetcode.com/problems/merge-sorted-array/
/// Author : zcer
/// Time   : 2019-01-15

class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer   $m
     * @param Integer[] $nums2
     * @param Integer   $n
     * @return NULL
     *
     * 从最后元素向前遍历，从$nums1最后向前插入，最后单独处理$nums1先插入完的情况
     * 时间复杂度: O(n)
     * 空间复杂度：O(1)
     */
    function merge(&$nums1, $m, $nums2, $n)
    {
        $f        = $m - 1;
        $s        = $n - 1;
        $position = $n + $m - 1;
        while ($f >= 0 && $s >= 0) {
            if ($nums1[$f] > $nums2[$s]) {
                $nums1[$position] = $nums1[$f];
                $f--;
            } else {
                $nums1[$position] = $nums2[$s];
                $s--;
            }
            $position--;
        }

        while ($s >= 0) {
            $nums1[$position] = $nums2[$s];
            $s--;
            $position--;
        }
    }
}
