<?php
/// Source : https://leetcode.com/problems/reverse-integer/description/
/// Author : zcer
/// Time   : 2019-01-08

class Solution
{

    /**
     * @param Integer $x
     * @return Integer
     *
     *  转换成字符串，然后按位互换
     *  Time Complexity: O(n)
     *  Space Complexity: O(1)
     */
    function reverse($x)
    {
        $isMinus = $x < 0 ? true : false;

        $x = $isMinus ? strval(-$x) : strval($x);

        // 也可以用 strrev() 函数反转字符串
        $length = strlen($x);
        for ($i = 0; $i < $length / 2; $i++) {
            list ( $x[$i],$x[$length-$i-1] ) = array ($x[$length-$i-1], $x[$i] );
        }

        $ret = $isMinus ? -(int)$x : (int)$x;
        if ($ret > 2147483647 || $ret < -2147483648) {
            return 0;
        }

        return $ret;
    }
}