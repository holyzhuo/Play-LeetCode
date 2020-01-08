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
     *  Time Complexity: O(n)
     *  Space Complexity: O(1)
     */
    function isPalindrome($x)
    {
        if ($x < 0) return false;
        if (strrev($x) == $x) return true;
        return false;
    }
}