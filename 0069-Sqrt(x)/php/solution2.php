<?php
/// Source : https://leetcode.com/problems/sqrtx/
/// Author : zcer
/// Time   : 2020-06-17

class Solution
{

    /**
     * @param Integer $x
     * @return Integer
     *
     * 二分查找法
     * 时间复杂度: O(log(n))
     * 空间复杂度: O(1）
     */
    function mySqrt($x)
    {
        $l = 0;
        $r = $x;

        while ($l < $r) {
            $m = (int)($l + ($r - $l) / 2 + 1);

            if ($m > $x / $m) {
                $r = $m - 1;
            } else {
                $l = $m;
            }
        }

        return $l;
    }
}