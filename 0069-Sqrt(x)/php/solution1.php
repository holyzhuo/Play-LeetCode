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
     * 使用牛顿迭代法
     */
    function mySqrt($x)
    {
        $r = $x;
        while ($r * $r > $x) $r = (int)(($r + $x / $r) / 2);
        return $r;
    }
}