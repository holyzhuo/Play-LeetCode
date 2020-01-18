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
     * 如果出现下一个值，比之前已匹配的上一个值小，则开始下一轮匹配
     * 时间复杂度: O(n)
     * 空间复杂度： O(1)
     */
    function maxProfit($prices)
    {
        $min       = $prices[0];
        $retProfit = 0;
        $maxProfit = 0;
        $isDone    = false;
        for ($i = 1; $i < count($prices); $i++) {
            if ($min > $prices[$i]) {
                $min = $prices[$i];
            }

            if ($isDone && $prices[$i] < $prices[$i - 1]) {
                $min       = $prices[$i];
                $isDone    = false;
                $retProfit += $maxProfit;
                $maxProfit = 0;
                continue;
            }

            if ($maxProfit < ($prices[$i] - $min)) {
                $maxProfit = $prices[$i] - $min;
                $isDone    = true;
            }

            if ($i + 1 == count($prices)) {
                $retProfit += $maxProfit;
            }
        }

        return $retProfit;
    }
}