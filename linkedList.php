<?php
/**
 *  反转链表
 */

class Node {
    public $data;
    public $next;

    public function __construct($data = '') {
        $this->data = $data;
    }
}

class LinkedList {

    //创建一个链表
    public function create($start = 1, $end = 5) {
        //头插法创建一个链表
        $linkedlist = new Node();
        $linkedlist->next = null;
        $linkedlist->data = "";

        for ($i=$start; $i<=$end; $i++) {
            $node = new Node();
            $node->data = "$i";
            $node->next = $linkedlist->next;
            $linkedlist->next = $node;
        }

        return $linkedlist;
    }

    /**
     * @return Node
     */
    public function createTmp1() {
        $node = new Node();
        $node->next = null;
        $node->data = "5";

        $node2 = new Node();
        $node2->data = "3";
        $node2->next = $node;

        $node3 = new Node();
        $node3->data = "1";
        $node3->next = $node2;
        return $node3;
    }
    /**
     * @return Node
     */
    public function createTmp2() {
        $node = new Node();
        $node->next = null;
        $node->data = "6";

        $node2 = new Node();
        $node2->data = "4";
        $node2->next = $node;

        $node3 = new Node();
        $node3->data = "2";
        $node3->next = $node2;
        return $node3;
    }

    public function merge($linkList1, $linkList2) {
        $head = new Node();
        while ($linkList1 && $linkList2) {
            if ($linkList1->data < $linkList2->data) {
                $head->next = $linkList2;
                $linkList1 = $linkList1->next;
            } else {
                $head->next = $linkList1;
                $linkList2 = $linkList2->next;
            }

            $head = $head->next;
        }
        print_r($head);
    }

    /**
     * 判断链表是否有环
     * @param $linkList
     * @return bool
     */
    public function isCycle($linkList) {
        $fast = $linkList;
        $slow = $linkList;

        while ($fast != null && $slow != null) {
            $fast = $fast->next->next;
            $slow = $slow->next;

            if ($slow == $fast) {
                return true;
            }
        }
        return false;
    }

    //反转链表
    public function reverse($list) {
        $pre = null;
        $now = $list;

        while ($now != null) {
            $next = $now->next; //保存下个节点
            $now->next = $pre; //当前节点的下个节点为正向的上个节点，这一步把箭头就反过来了
            $pre = $now; //改上个节点为当前节点，这样下次循环的时候就知道上个节点是哪个
            $now = $next; //改当前节点为下个节点，也就是循环往后移动一个位置
        }

        return $pre;
    }

}

$linkedlist = new LinkedList();
$list1 = $linkedlist->create();
//echo "<pre>"; var_dump($list1);

//$list2 = $linkedlist->createTmp1();
//$list3 = $linkedlist->createTmp2();
//$mergedlist = $linkedlist->merge($list2, $list3);
$flag = $linkedlist->isCycle($list1);
echo "<pre>"; var_dump($flag);

//$new_linkedlist = $linkedlist->reverse($list);
//echo "<pre>"; var_dump($new_linkedlist);