<?php
/**
 * Created by PhpStorm.
 * Author: wulinzhu
 * Email: 18515831680@163.com
 * Date: 2022/2/20 下午4:04
 *
 * 二叉树的先序，中序，后序遍历 （递归）
 * 层序遍历
 *
 */

class Node {
    public $root;
    public $left = null;
    public $right = null;
}

class BinaryTree {

    //保存遍历后的二叉树
    public $traversedTree = [];

    /**
     * 先序遍历
     * @param $binaryTree
     * @return void
     */
    public function preOrder($binaryTree) {
        if ($binaryTree->root != null) {
            $this->traversedTree[] = $binaryTree->root;
            if (! is_null($binaryTree->left)) {
                $this->preOrder($binaryTree->left);
            }
            if (! is_null($binaryTree->right)) {
                $this->preOrder($binaryTree->right);
            }
        }
    }

    /**
     * 中序遍历
     * @param $binaryTree
     */
    public function middleOrder($binaryTree) {
        if ($binaryTree->root != null) {
            if ($binaryTree->left != null) {
                $this->middleOrder($binaryTree->left);
            }
            $this->traversedTree[] = $binaryTree->root;
            if ($binaryTree->right != null) {
                $this->middleOrder($binaryTree->right);
            }
        }
    }

    /**
     * 后序遍历
     * @param $binaryTree
     * @return void
     */
    public function afterOrder($binaryTree) {
        if ($binaryTree->root != null) {
            if ($binaryTree->left != null) {
                $this->afterOrder($binaryTree->left);
            }
            if ($binaryTree->right != null) {
                $this->afterOrder($binaryTree->right);
            }
            $this->traversedTree[] = $binaryTree->root;
        }
    }

    /**
     * 层序遍历
     * @param $binaryTree
     * @return array
     */
    public function levelOrder($binaryTree) {
        $queue = [];
        array_unshift($queue, $binaryTree); //根节点入队

        $ret = [];
        while (! empty($queue)) { //持续输出节点，直到队列为空
            $data = array_pop($queue); //队尾元素出队
            $ret[] = $data->root;
            //左节点先入队，然后右节点入队
            if ($data->left != null) array_unshift($queue, $data->left);
            if ($data->right != null) array_unshift($queue, $data->right);
        }
        return $ret;
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

$binaryTree = new BinaryTree();
$tree = $binaryTree->create();
echo "<pre>";print_r($tree);

$ret = $binaryTree->levelOrder($tree);
print_r($ret);
//$binaryTree->middleOrder($tree);
//echo "<pre>";print_r($binaryTree->traversedTree);
//$binaryTree->preOrder($tree);
//echo "<pre>";print_r($binaryTree->traversedTree);
//$binaryTree->afterOrder($tree);
//echo "<pre>";print_r($binaryTree->traversedTree);