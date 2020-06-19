<?php
/// Source : https://leetcode.com/problems/count-primes/
/// Author : zcer
/// Time   : 2020-06-19
///
class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     *
     * 埃拉托斯特尼筛法：一个合数总是可以分解成若干个质数的乘积，那么如果把质数（最初只知道2是质数）的倍数都去掉，那么剩下的就是质数了
     * 时间复杂度: O(n2)
     * 空间复杂度: O(n)
     */

    function countPrimes($n)
    {
        if ($n < 3) return 0;
        $count    = 0;
        $isPrimes = [];
        for ($i = 2; $i < $n; $i++) {
            $isPrimes[$i] = true;
        }
        for ($i = 2; $i * $i < $n; $i++) {
            if ($isPrimes[$i]) {
                for ($j = 2; $j * $i < $n; $j++) {
                    $isPrimes[$i * $j] = false;
                }
            }
        }

        foreach ($isPrimes as $v) {
            if ($v) $count++;
        }

        return $count;
    }
}