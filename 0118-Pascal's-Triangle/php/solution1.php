<?php
/// Source : https://leetcode.com/problems/pascals-triangle/submissions/
/// Author : zcer
/// Time   : 2019-05-08

class Solution
{

    private $total = [];
    private $lastRow = [];

    /**
     * @param Integer $numRows
     * @return Integer[][]
     *
     * 每行首尾元素均为1, 其次遍历每个元素为上一层的j-1 + j 位置的值
     * 时间复杂度: O(n2)
     * 空间复杂度: O(n)
     */
    function generate($numRows)
    {
        for ($i = 1; $i <= $numRows; $i++) {
            $currentRow = [];
            for ($j = 0; $j < $i; $j++) {
                if ($j == 0 || $j == $i - 1) {
                    $currentRow[] = 1;
                    continue;
                }
                $currentRow[] = $this->lastRow[$j - 1] + $this->lastRow[$j];
            }
            $this->total[] = $currentRow;
            $this->lastRow = $currentRow;
        }
        return $this->total;
    }
}