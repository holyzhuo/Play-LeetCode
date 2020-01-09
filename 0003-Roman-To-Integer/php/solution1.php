<?php
/// Source : https://leetcode.com/problems/roman-to-integer/
/// Author : zcer
/// Time   : 2019-01-09

class Solution
{

    /**
     * @param String $s
     * @return Integer
     *
     *  每次循环判断下一个元素的对应值是否大于本元素， 最后需加上最后一个元素的值
     *  Time Complexity: O(n)
     *  Space Complexity: O(1)
     */
    function romanToInt($s)
    {
        $romanNum = [
            'M' => 1000,
            'D' => 500,
            'C' => 100,
            'L' => 50,
            'X' => 10,
            'V' => 5,
            'I' => 1,
        ];

        $total = 0;
        for ($i = 0; $i < strlen($s) - 1; $i++) {
            if ($romanNum[$s[$i]] >= $romanNum[$s[$i + 1]]) {
                $total += $romanNum[$s[$i]];
            } else {
                $total -= $romanNum[$s[$i]];
            }
        }
        return $total + $romanNum[substr($s, -1)];
    }
}