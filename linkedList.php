<?php
/**
 *  反转链表
 */

class Node {
    public $data;
    public $next;
}

class LinkedList {

    //创建一个链表
    public function create() {
        //头插法创建一个链表
        $linkedlist = new Node();
        $linkedlist->next = null;
        $linkedlist->data = "";

        for ($i=1; $i<=5; $i++) {
            $node = new Node();
            $node->data = "数据{$i}";
            $node->next = $linkedlist->next;
            $linkedlist->next = $node;
        }

        return $linkedlist;
    }

    //反转链表
    public function reverse($list) {
        $pre = null;
        $now = $list;
        $next = null;

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
$list = $linkedlist->create();
echo "<pre>"; var_dump($list);

$new_linkedlist = $linkedlist->reverse($list);
echo "<pre>"; var_dump($new_linkedlist);