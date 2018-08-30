<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Likehotels Controller
 *
 * @property \App\Model\Table\LikehotelsTable $Likehotels
 *
 * @method \App\Model\Entity\Likehotel[] paginate($object = null, array $settings = [])
 */
class LikehotelsController extends AppController {

    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'view', 'add', 'edit', 'delete']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Users', 'Hotels']
        ];
        $likehotels = $this->paginate($this->Likehotels);

        $this->set(compact('likehotels'));
        $this->set('_serialize', ['likehotels']);
    }

    /**
     * View method
     *
     * @param string|null $id Likehotel id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $likehotel = $this->Likehotels->get($id, [
            'contain' => ['Users', 'Hotels']
        ]);

        $this->set('likehotel', $likehotel);
        $this->set('_serialize', ['likehotel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $res = array();
        $likehotel = $this->Likehotels->newEntity();
        if ($this->request->is('post')) {
            $likehotel = $this->Likehotels->patchEntity($likehotel, $this->request->getData());
            if ($this->Likehotels->save($likehotel)) {
                $res['status'] = 1;
                $res['msg'] = 'Thành công.';
            } else {
                $res['status'] = 0;
                $res['msg'] = 'Lỗi.';
            }
        }
        $users = $this->Likehotels->Users->find('list', ['limit' => 200]);
        $hotels = $this->Likehotels->Hotels->find('list', ['limit' => 200]);
        $this->set(compact('res', 'users', 'hotels'));
        $this->set('_serialize', ['res']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Likehotel id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $likehotel = $this->Likehotels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $likehotel = $this->Likehotels->patchEntity($likehotel, $this->request->getData());
            if ($this->Likehotels->save($likehotel)) {
                $this->Flash->success(__('The likehotel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The likehotel could not be saved. Please, try again.'));
        }
        $users = $this->Likehotels->Users->find('list', ['limit' => 200]);
        $hotels = $this->Likehotels->Hotels->find('list', ['limit' => 200]);
        $this->set(compact('likehotel', 'users', 'hotels'));
        $this->set('_serialize', ['likehotel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Likehotel id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $res = array();
        $this->request->allowMethod(['post', 'delete']);
        $likehotel = $this->Likehotels->get($id);
        if ($this->Likehotels->delete($likehotel)) {
            $res['status'] = 1;
            $res['msg'] = 'Thành công.';
        } else {
            $res['status'] = 0;
            $res['msg'] = 'Lỗi.';
        }
        $this->set(compact('res'));
        $this->set('_serialize', ['res']);

        //return $this->redirect(['action' => 'index']);
    }

}
