<?php
/// Source : https://leetcode.com/problems/intersection-of-two-linked-lists/
/// Author : zcer
/// Time   : 2020-07-03
///
class Solution
{
    /**
     * Definition for a singly-linked list.
     * class ListNode {
     *     public $val = 0;
     *     public $next = null;
     *     function __construct($val) { $this->val = $val; }
     * }
     */
    /**
     * @param String $s
     * @return Integer
     *
     * 时间复杂度: O(n+m)
     * 空间复杂度: O(1)
     */
    function getIntersectionNode($headA, $headB)
    {
        if (!$headA->val || !$headB->val) return null;

        $a = $headA;
        $b = $headB;
        while ($a !== $b) {
            $a = $a == null ? $headB : $a->next;
            $b = $b == null ? $headA : $b->next;
        }
        return $a;
    }
}