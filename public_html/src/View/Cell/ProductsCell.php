<?php

namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Products cell
 */
class ProductsCell extends Cell {

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
    public function featured($limit = 8) {
        $this->loadModel('Products');
        $products = $this->Products->find()->where(['status' => 1, 'featured' => 1])->limit($limit)->orderDesc('id');
        $this->set('products', $products);
    }
    
    public function comments($limit = 3) {
        $this->loadModel('Products');
        $products = $this->Products->find()
                ->contain(['Comments'])
                ->where(['status' => 1])
                ->limit($limit)
                ->orderDesc('id');
        $this->set('products', $products);
    }    

    public function promotion($limit = 4) {
        $this->loadModel('Products');
        $products = $this->Products->find()->where(['status' => 1, 'price_promotion <>' => 0])->limit($limit)->orderDesc('id');
        $this->set('products', $products);
    }

    public function categories($type = 0) {
        $this->loadModel('Categories');
        if ($type == 0) {
            $categories = $this->Categories->find()->where(['status' => 1, 'parent_id' => 0])->orderDesc('id');
        } else {
            $categories = $this->Categories->find('threaded')->where(['status' => 1])->orderDesc('id');
        }
        $this->set('categories', $categories);
    }

    public function newproduct($limit = 8) {
        $this->loadModel('Products');
        $products = $this->Products->find()->where(['status' => 1])->limit($limit)->orderDesc('id');
        $this->set('products', $products);
    }

    public function related($id, $categories, $limit = 8) {
        $this->loadModel('Products');
        $products = $this->Products->find()
                ->contain(['Categories' => function($q) use($categories) {
                        return $q->where(['Categories.id IN' => $categories, 'Categories.status' => 1]);
                    }])
                ->where(['Products.status' => 1])
                ->limit($limit)
                ->orderDesc('id');
        $this->set('products', $products);
    }

}
