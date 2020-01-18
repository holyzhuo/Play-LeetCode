<?php
/// Source : https://leetcode.com/problems/best-time-to-buy-and-sell-stock-ii/
/// Author : zcer
/// Time   : 2019-01-18

class Solution
{

    /**
     * @param Integer[] $prices
     * @return Integer
     *
     * 所有第二个数比上一个数大的差值的和，就是最终所求
     * 时间复杂度: O(n)
     * 空间复杂度： O(1)
     */
    function maxProfit($prices)
    {
        $maxProfit = 0;
        for ($i = 1; $i < count($prices); $i++) {
            if ($prices[$i] > $prices[$i - 1]) {
                $maxProfit += $prices[$i] - $prices[$i - 1];
            }
        }

        return $maxProfit;
    }
}