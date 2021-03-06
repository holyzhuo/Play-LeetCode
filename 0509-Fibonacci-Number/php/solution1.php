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
     * 递归
     * 时间复杂度: O(2n次方)
     * 空间复杂度: O(n)
     */
    function fib($N)
    {
        if ($N == 0) return 0;
        if ($N == 1) return 1;
        return $this->fib($N - 1) + $this->fib($N - 2);
    }
}