<?php
/// Source : https://leetcode.com/problems/palindrome-number/
/// Author : zcer
/// Time   : 2019-01-08

class Solution
{

    /**
     * @param Integer $x
     * @return Boolean
     *
     * 把数字分为前后两部分，然后判断两部分是否相等
     *  Time Complexity: O(n)
     *  Space Complexity: O(1)
     */
    function isPalindrome($x)
    {
        if ($x < 0 || ($x % 10 == 0 && $x != 0)) {
            return false;
        }

        $revert = 0;
        while ($x > $revert) {
            $revert = $revert * 10 + $x % 10;
            $x      = (int)($x / 10);
        }

        return $x == $revert || $x == (int)($revert / 10);
    }
}