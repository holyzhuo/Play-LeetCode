<?php
/// Source : https://leetcode.com/problems/happy-number/
/// Author : zcer
/// Time   : 2020-06-19
///
class Solution
{

    /**
     * @param Integer $n
     * @return Boolean
     *
     * 时间复杂度: O(n2)
     * 空间复杂度: O(n)
     */
    function isHappy($n)
    {
        $uniArr = [];
        while ($n != 1) {
            $n = $this->cal((string)$n);
            if (isset($uniArr[$n])) return false;
            $uniArr[$n] = true;
        }
        return true;
    }

    function cal($strNum)
    {
        $res = 0;
        for ($i = 0; $i < strlen($strNum); $i++) {
            $res += $strNum[$i] * $strNum[$i];
        }
        return $res;
    }
}