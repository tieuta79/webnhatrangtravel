<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Likereviews Controller
 *
 * @property \App\Model\Table\LikereviewsTable $Likereviews
 *
 * @method \App\Model\Entity\Likereview[] paginate($object = null, array $settings = [])
 */
class LikereviewsController extends AppController
{
    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'view', 'add', 'edit', 'delete']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Reviews']
        ];
        $likereviews = $this->paginate($this->Likereviews);

        $this->set(compact('likereviews'));
        $this->set('_serialize', ['likereviews']);
    }

    /**
     * View method
     *
     * @param string|null $id Likereview id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $likereview = $this->Likereviews->get($id, [
            'contain' => ['Users', 'Reviews']
        ]);

        $this->set('likereview', $likereview);
        $this->set('_serialize', ['likereview']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $res = array();
        $likereview = $this->Likereviews->newEntity();
        if ($this->request->is('post')) {
            $likereview = $this->Likereviews->patchEntity($likereview, $this->request->getData());
            if ($this->Likereviews->save($likereview)) {
                $res['status'] = 1;
                $res['msg'] = 'Bình luận thêm thành công.';
            }
            else {
                $res['status'] = 0;
                $res['msg'] = 'Bình luận thêm bị lỗi.';
            }
            //$this->Flash->error(__('The likereview could not be saved. Please, try again.'));
        }
        $users = $this->Likereviews->Users->find('list', ['limit' => 200]);
        $reviews = $this->Likereviews->Reviews->find('list', ['limit' => 200]);
        $this->set(compact('res', 'users', 'reviews'));
        $this->set('_serialize', ['res']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Likereview id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $likereview = $this->Likereviews->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $likereview = $this->Likereviews->patchEntity($likereview, $this->request->getData());
            if ($this->Likereviews->save($likereview)) {
                $this->Flash->success(__('The likereview has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The likereview could not be saved. Please, try again.'));
        }
        $users = $this->Likereviews->Users->find('list', ['limit' => 200]);
        $reviews = $this->Likereviews->Reviews->find('list', ['limit' => 200]);
        $this->set(compact('likereview', 'users', 'reviews'));
        $this->set('_serialize', ['likereview']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Likereview id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res = array();
        $this->request->allowMethod(['post', 'delete']);
        $likereview = $this->Likereviews->get($id);
        if ($this->Likereviews->delete($likereview)) {
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
