<?php
/// Source : https://leetcode.com/problems/two-sum-ii-input-array-is-sorted/
/// Author : zcer
/// Time   : 2019-05-09

class Solution {

    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     *
     * 暴力破解
     * 时间复杂度: O(n2)
     * 空间复杂度: O(1)
     */
    function twoSum($numbers, $target) {
        $len = count($numbers);
        $lastNo = null;
        for($i=0; $i < $len; $i++) {
            if($i != 0 && $numbers[$i] == $numbers[$i-1]) {
                continue;
            }
            for($j = $i+1; $j < $len; $j++) {
                if($numbers[$i] + $numbers[$j] == $target) return [$i+1, $j+1];
            }
        }
    }
}