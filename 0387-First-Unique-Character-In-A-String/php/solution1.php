<?php
/// Source : https://leetcode.com/problems/first-unique-character-in-a-string/
/// Author : zcer
/// Time   : 2020-06-28
///
class Solution
{
    /**
     * @param String $s
     * @return Integer
     *
     * 时间复杂度: O(n)
     * 空间复杂度: O(n)
     */
    function firstUniqChar($s)
    {
        $hashTable = [];
        for ($i = 0; $i < strlen($s); $i++) {
            $hashTable[$s[$i]]++;
        }

        for ($i = 0; $i < strlen($s); $i++) {
            if ($hashTable[$s[$i]] == 1) {
                return $i;
            }
        }
        return -1;
    }
}