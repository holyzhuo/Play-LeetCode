<?php
/// Source : https://leetcode.com/problems/pascals-triangle-ii/
/// Author : zcer
/// Time   : 2019-05-09

class Solution
{
    /**
     * @param Integer $rowIndex
     * @return Integer[]
     *
     * 只用一个空间保存最新行
     * 时间复杂度: O(n2)
     * 空间复杂度: O(k)
     */
    function getRow($rowIndex)
    {
        $res[0] = 1;
        for ($i = 1; $i <= $rowIndex; $i++) {
            for ($j = $i; $j >= 0; $j--) {
                $res[$j] += $res[$j - 1];
            }
        }

        return $res;
    }
}