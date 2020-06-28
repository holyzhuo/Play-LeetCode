<?php
/// Source : https://leetcode.com/problems/valid-anagram/
/// Author : zcer
/// Time   : 2020-06-23
///
class Solution
{

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     *
     * 时间复杂度: O(n)
     * 空间复杂度: O(n)
     */
    function isAnagram($s, $t)
    {
        $sLen = strlen($s);
        $tLen = strlen($t);

        if ($sLen != $tLen) {
            return false;
        }

        $strHashTable = [];
        for ($i = 0; $i < $sLen; $i++) {
            $strHashTable[$s[$i]]++;
        }

        for ($j = 0; $j < $tLen; $j++) {
            if (!$strHashTable[$t[$j]] || $strHashTable[$t[$j]] < 1) {
                return false;
            }
            $strHashTable[$t[$j]]--;
        }

        return true;
    }
}