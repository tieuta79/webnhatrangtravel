<?php

namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Comments cell
 */
class CommentsCell extends Cell {

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function recent($limit = 5) {
        $this->loadModel('Comments');
        $comments = $this->Comments->find()
                ->contain(['Users'])
                ->where(['Comments.status' => 1])
                ->limit($limit)
                ->orderDesc('Comments.id');
        $this->set('comments', $comments);
    }

    public function showByContent($id = null) {
        $this->loadModel('Comments');
        $comments = $this->Comments->find()
                ->contain(['Users'])
                ->where(['Comments.content_id' => $id, 'Comments.status' => 1])
                ->orderDesc('Comments.id');
        $this->set('comments', $comments);
    }

    public function showByProduct($id = null) {
        $this->loadModel('Comments');
        $comments = $this->Comments->find()
                ->contain(['Users'])
                ->where(['Comments.product_id' => $id, 'Comments.status' => 1])
                ->orderDesc('Comments.id');
        $this->set('comments', $comments);
    }

}
