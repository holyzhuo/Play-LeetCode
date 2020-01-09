<?php
/// Source : https://leetcode.com/problems/remove-element/
/// Author : zcer
/// Time   : 2019-01-09

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     *
     *  如果值相等，则删除数组元素
     *  Time Complexity: O(n)
     *  Space Complexity: O(1)
     */
    function removeElement(&$nums, $val) {
        foreach($nums as $key => $num) {
            if($num == $val) unset($nums[$key]);
        }
        return count($nums);
    }
}