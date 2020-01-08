<?php
/// Source : https://leetcode.com/problems/reverse-integer/description/
/// Author : zcer
/// Time   : 2019-01-08

class Solution
{

    /**
     * @param Integer $x
     * @return Integer
     *
     *  转换成字符串，然后按位互换
     *  Time Complexity: O(n)
     *  Space Complexity: O(1)
     */
    function reverse($x)
    {
        $ret = strrev($x) * ($x < 0 ? -1 : 1);
        if ($ret >= pow(2, 31) - 1 || $ret <= pow(2, 31) * -1) return 0;
        return $ret;
    }
}