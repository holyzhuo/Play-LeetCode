<?php
/// Source : https://leetcode.com/problems/longest-common-prefix/
/// Author : zcer
/// Time   : 2019-01-08

class Solution
{

    /**
     * @param String[] $strs
     * @return String
     *
     *  选取首个元素，循环判断单个元素
     *  Time Complexity: O(S)  S为最大相同字符串
     *  Space Complexity: O(1)
     */
    function longestCommonPrefix($strs)
    {
        if (count($strs) == 0 || $strs[0] == "") return "";
        for ($j = 0; $j < strlen($strs[0]); $j++) {
            $ipre = $strs[0][$j];
            for ($i = 1; $i < count($strs); $i++) {
                if ($j == strlen($strs[$i]) || $strs[$i][$j] != $ipre) {
                    return substr($strs[0], 0, $j);
                }
            }
        }
        return $strs[0];
    }
}