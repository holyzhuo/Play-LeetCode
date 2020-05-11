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
     * 时间复杂度: O(n)
     * 空间复杂度: O(1)
     */
    function fib($N)
    {
        $first  = 0;
        $second = 1;
        if ($N == 0) return $first;
        if ($N == 1) return $second;

        for ($i = 2; $i <= $N; $i++) {
            $ret    = $first + $second;
            $first  = $second;
            $second = $ret;
        }

        return $ret;
    }
}