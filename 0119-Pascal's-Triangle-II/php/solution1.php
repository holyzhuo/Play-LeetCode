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
     * 每行首尾元素均为1, 其次遍历每个元素为上一层的j-1 + j 位置的值
     * 时间复杂度: O(n2)
     * 空间复杂度: O(n)
     */
    function getRow($rowIndex)
    {
        $lastRow = [];
        for ($i = 1; $i <= $rowIndex + 1; $i++) {
            $currentRow = [];
            for ($j = 0; $j < $i; $j++) {
                if ($j == 0 || $j == $i - 1) {
                    $currentRow[] = 1;
                    continue;
                }
                $currentRow[] = $lastRow[$j - 1] + $lastRow[$j];
            }
            $lastRow = $currentRow;
        }

        return $lastRow;
    }
}