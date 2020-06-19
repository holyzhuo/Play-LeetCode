<?php
/// Source : https://leetcode.com/problems/count-primes/
/// Author : zcer
/// Time   : 2020-06-19
///
class Solution
{
    private $primeArr = [2];

    /**
     * @param Integer $n
     * @return Integer
     *
     * 合数一定能分解为 若干个 质素相乘
     * 时间复杂度: O(n2)
     * 空间复杂度: O(n)
     */

    function countPrimes($n)
    {
        if ($n < 3) return 0;
        for ($i = 3; $i < $n; $i++) {
            if ($this->isPrime($i)) {
                $this->primeArr[] = $i;
            }
        }

        return count($this->primeArr);
    }

    function isPrime($n)
    {
        for ($i = 0; $this->primeArr[$i] * $this->primeArr[$i] <= $n; $i++) //用primes中存储的素数做为试除因子。
        {
            if ($n % $this->primeArr[$i] == 0) return false;
        }
        return true;
    }
}