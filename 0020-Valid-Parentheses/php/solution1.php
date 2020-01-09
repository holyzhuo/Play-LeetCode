<?php
/// Source : https://leetcode.com/problems/valid-parentheses/
/// Author : zcer
/// Time   : 2019-01-09

class Solution
{

    /**
     * @param String $s
     * @return Boolean
     *
     *  用栈保存左括号的所有结果，匹配则出栈
     *  Time Complexity: O(n)
     *  Space Complexity: O(n)
     */
    function isValid($s)
    {
        $map = [
            '(' => ')',
            '[' => ']',
            '{' => '}',
        ];

        $stack = [];
        for ($i = 0; $i < strlen($s); $i++) {
            if (isset($map[$s[$i]])) {
                $stack[] = $s[$i];
                continue;
            }

            if ($map[$stack[count($stack) - 1]] == $s[$i]) {
                array_pop($stack);
            } else {
                return false;
            }
        }

        return count($stack) == 0;
    }
}