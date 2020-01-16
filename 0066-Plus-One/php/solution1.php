<?php
/// Source : https://leetcode.com/problems/plus-one/
/// Author : zcer
/// Time   : 2019-01-16

class Solution
{

    /**
     * @param Integer[] $digits
     * @return Integer[]
     *
     * 从最后一位一次向前进位
     * 时间复杂度：O(n)
     * 空间复杂度： O(1)
     */
    function plusOne($digits)
    {
        $isCarry = false;
        for ($i = count($digits) - 1; $i >= 0; $i--) {
            if ($i == (count($digits) - 1) || $isCarry) {
                if ($digits[$i] + 1 > 9) {
                    $digits[$i] = 0;
                    $isCarry    = true;
                    if ($i == 0) array_unshift($digits, 1);
                } else {
                    $digits[$i]++;
                    break;
                }
            }
        }
        return $digits;
    }
}