<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Followings Controller
 *
 * @property \App\Model\Table\FollowingsTable $Followings
 *
 * @method \App\Model\Entity\Following[] paginate($object = null, array $settings = [])
 */
class FollowingsController extends AppController {

    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'view', 'add', 'delete']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $this->paginate = [
            'contain' => ['User_follow', 'Users_following']
        ];
        $followings = $this->paginate($this->Followings);

        $this->set(compact('followings'));
        $this->set('_serialize', ['followings']);
    }

    /**
     * View method
     *
     * @param string|null $id Following id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $following = $this->Followings->get($id, [
            'contain' => ['User_follow', 'Users_following']
        ]);

        $this->set('following', $following);
        $this->set('_serialize', ['following']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $res = array();
        $following = $this->Followings->newEntity();
        if ($this->request->is('post')) {
            $following = $this->Followings->patchEntity($following, $this->request->getData());
            if ($this->Followings->save($following)) {
                $res['status'] = 1;
                $res['msg'] = 'Thành công.';
            } else {
                $res['status'] = 0;
                $res['msg'] = 'Lỗi.';
            }
        }
        $user_follow = $this->Followings->Users->find('list', ['limit' => 200]);
        pr($user_follow);
        $users_following = $this->Followings->Users->find('list', ['limit' => 200]);
        $this->set(compact('res', 'user_follow', 'users_following'));
        $this->set('_serialize', ['res']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Following id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $following = $this->Followings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $following = $this->Followings->patchEntity($following, $this->request->getData());
            if ($this->Followings->save($following)) {
                $this->Flash->success(__('The following has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The following could not be saved. Please, try again.'));
        }
        $followings = $this->Followings->Followings->find('list', ['limit' => 200]);
        $users = $this->Followings->Users->find('list', ['limit' => 200]);
        $this->set(compact('following', 'followings', 'users'));
        $this->set('_serialize', ['following']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Following id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $res = array();
        $this->request->allowMethod(['post', 'delete']);
        $following = $this->Followings->get($id);
        if ($this->Followings->delete($following)) {
            $res['status'] = 1;
            $res['msg'] = 'Thành công.';
        } else {
            $res['status'] = 0;
            $res['msg'] = 'Lỗi.';
        }

        $this->set(compact('res'));
        $this->set('_serialize', ['res']);
    }

}
