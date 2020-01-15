<?php
/// Source : https://leetcode.com/problems/find-all-numbers-disappeared-in-an-array/
/// Author : zcer
/// Time   : 2019-01-15

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     *
     * 根据最大最小值生成数组，然后删除存在的key，剩下的即为所得
     * 时间复杂度: O(n)
     * 空间复杂度: O(1)  因为返回的数组不算空间复杂度
     */
    function findDisappearedNumbers($nums)
    {
        $ret = [];
        for ($i = 1; $i < count($nums) + 1; $i++) {
            $ret[$i] = $i;
        }

        foreach ($nums as $num) {
            unset($ret[$num]);
        }

        return $ret;
    }
}