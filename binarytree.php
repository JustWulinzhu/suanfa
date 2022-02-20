<?php
/**
 * Created by PhpStorm.
 * Author: wulinzhu
 * Email: 18515831680@163.com
 * Date: 2022/2/20 下午4:04
 *
 * 二叉树的先序，中序，后序遍历
 *
 */

class Node {
    public $root;
    public $left = null;
    public $right = null;
}

class BinaryTree {

    //保存遍历后的二叉树
    public $traversed_tree = [];

    /**
     * 先序遍历 (递归法)
     * @param $binaryTree
     * @return void
     */
    public function preOrder($binaryTree) {
        if ($binaryTree->root != null) {
            $this->traversed_tree[] = $binaryTree->root;
            if (! is_null($binaryTree->left)) {
                $this->preOrder($binaryTree->left);
            }
            if (! is_null($binaryTree->right)) {
                $this->preOrder($binaryTree->right);
            }
        }
    }

    /**
     * 创建一个二叉树
     * @return Node
     */
    public function create() {
        $a = new Node();
        $b = new Node();
        $c = new Node();
        $d = new Node();
        $e = new Node();
        $f = new Node();
        $g = new Node();

        $a->root = 'A';
        $a->left = $b;
        $a->right = $c;

        $b->root = 'B';
        $b->left = $d;
        $b->right = $e;

        $c->root = 'C';
        $c->left = $f;
        $c->right = $g;

        $d->root = 'D';
        $e->root = 'E';
        $f->root = 'F';
        $g->root = 'G';

        return $a;
    }

}

$binary_tree = new BinaryTree();
$tree = $binary_tree->create();
echo "<pre>";print_r($tree);
$binary_tree->preOrder($tree);
echo "<pre>";print_r($binary_tree->traversed_tree);