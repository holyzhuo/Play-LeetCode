<?php
/// Source : https://leetcode.com/problems/best-time-to-buy-and-sell-stock/
/// Author : zcer
/// Time   : 2019-01-11

class Solution
{

    /**
     * @param Integer[] $prices
     * @return Integer
     *
     * 实际上是取前n个的最小值，和循环中的数做差
     * Time Complexity: O(n)
     * Space Complexity: O(1)
     */
    function maxProfit($prices)
    {
        $min       = $prices[0];
        $maxProfit = 0;
        for ($i = 1; $i < count($prices); $i++) {
            if ($min > $prices[$i]) {
                $min = $prices[$i];
            }

            if ($maxProfit < ($prices[$i] - $min)) {
                $maxProfit = $prices[$i] - $min;
            }
        }
        return $maxProfit;
    }
}