<?php
/// Source : https://leetcode.com/problems/fibonacci-number/
/// Author : zcer
/// Time   : 2020-05-11
///

class Solution
{

    /**
     * @param Integer $N
     * @return Integer
     *
     * 时间复杂度: O(1)
     * 空间复杂度: O(1)
     */
    function fib($N)
    {
        $goldenRatio = (1 + sqrt(5)) / 2;
        return (int)round(pow($goldenRatio, $N) / sqrt(5));
    }
}