<?php

namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Contents cell
 */
class ContentsCell extends Cell {

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
    public function featured($limit = 4) {
        $this->loadModel('Contents');
        $contents = $this->Contents->find()
                        ->contain(['Comments' => function($q) {
                                return $q->select(['id', 'content_id']);
                            }])
                        ->where(['status' => 1, 'featured' => 1, 'type' => 0])->limit($limit)->orderDesc('id');
        $this->set('contents', $contents);
    }

    public function recent($limit = 4) {
        $this->loadModel('Contents');
        $contents = $this->Contents->find()
                        ->contain(['Comments' => function($q) {
                                return $q->select(['id', 'content_id']);
                            }])
                        ->where(['status' => 1, 'type' => 0])->limit($limit)->orderDesc('id');
        $this->set('contents', $contents);
    }

}
