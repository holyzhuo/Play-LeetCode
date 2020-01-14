<?php
/// Source : https://leetcode.com/problems/move-zeroes/
/// Author : zcer
/// Time   : 2019-01-12

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     *
     * 去除0的元素，在数组结尾加入0
     * 时间复杂度: O(n)
     * 空间复杂度: O(1)
     */
    function moveZeroes(&$nums) {
        foreach($nums as $key => $num){
            if($num==0){
                unset($nums[$key]);
                $nums[] = 0;
            }
        }

        return $nums;
    }
}