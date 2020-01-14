<?php
/// Source : https://leetcode.com/problems/move-zeroes/
/// Author : zcer
/// Time   : 2019-01-12

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     * 
     * 一个变量记录截止遍历位置，最后一个0的位置，一个变量记录前面总0数量减1
     * 时间复杂度: O(n)
     * 空间复杂度: O(1)
     */
    function moveZeroes(&$nums) {
        $lastZero = -1;
        $zeroNum = -1;
        for($i=0;$i<count($nums);$i++) {
            if($nums[$i] == 0) {
                $lastZero = $i;
                $zeroNum++;
                continue;
            }

            if($zeroNum != -1) {
                list($nums[$i], $nums[$lastZero-$zeroNum]) = [$nums[$lastZero-$zeroNum], $nums[$i]];
                $lastZero = $i;
            }
        }
    }
}