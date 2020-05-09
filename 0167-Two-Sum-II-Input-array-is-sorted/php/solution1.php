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
     * 双指针
     * 时间复杂度: O(n)
     * 空间复杂度: O(1)
     */
    function twoSum($numbers, $target) {
        $first = 0;
        $second = count($numbers)-1;
        while($first < $second) {
            $sum = $numbers[$first] + $numbers[$second];
            if($sum == $target) {
                return [$first+1, $second+1];
            } else if ($sum > $target) {
                $second--;
            } else {
                $first++;
            }
        }
    }
}