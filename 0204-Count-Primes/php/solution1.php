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
     * 素数定理：如果一个数x是素数，那么在整数范围[2,√x ]之间，找不到任何能整除x 的整数
     * 时间复杂度: O(n2)
     * 空间复杂度: O(n)
     */
    function countPrimes($n)
    {
        $hashTable = [];
        for ($i = 2; $i < $n; $i++) {
            $hashTable[$i] = true;
        }

        $count = 0;
        foreach ($hashTable as $k => $v) {
            if ($this->isPrime($k)) {
                $count++;
            }
        }
        return $count;
    }

    function isPrime($x)
    {
        for ($i = 2; $i * $i <= $x; ++$i) {
            if ($x % $i == 0) return false;
        }
        return true;
    }
}