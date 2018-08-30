<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Likevehicles Controller
 *
 * @property \App\Model\Table\LikevehiclesTable $Likevehicles
 *
 * @method \App\Model\Entity\Likevehicle[] paginate($object = null, array $settings = [])
 */
class LikevehiclesController extends AppController
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
            'contain' => ['Users', 'Vehicles']
        ];
        $likevehicles = $this->paginate($this->Likevehicles);

        $this->set(compact('likevehicles'));
        $this->set('_serialize', ['likevehicles']);
    }

    /**
     * View method
     *
     * @param string|null $id Likevehicle id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $likevehicle = $this->Likevehicles->get($id, [
            'contain' => ['Users', 'Vehicles']
        ]);

        $this->set('likevehicle', $likevehicle);
        $this->set('_serialize', ['likevehicle']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $res = array();
        $likevehicle = $this->Likevehicles->newEntity();
        if ($this->request->is('post')) {
            $likevehicle = $this->Likevehicles->patchEntity($likevehicle, $this->request->getData());
            if ($this->Likevehicles->save($likevehicle)) {
                $res['status'] = 1;
                $res['msg'] = 'Thành công.';
            }
            else {
                $res['status'] = 0;
                $res['msg'] = 'Lỗi.';
            }
            //$this->Flash->error(__('The likevehicle could not be saved. Please, try again.'));
        }
        $users = $this->Likevehicles->Users->find('list', ['limit' => 200]);
        $vehicles = $this->Likevehicles->Vehicles->find('list', ['limit' => 200]);
        $this->set(compact('res', 'users', 'vehicles'));
        $this->set('_serialize', ['res']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Likevehicle id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $likevehicle = $this->Likevehicles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $likevehicle = $this->Likevehicles->patchEntity($likevehicle, $this->request->getData());
            if ($this->Likevehicles->save($likevehicle)) {
                $this->Flash->success(__('The likevehicle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The likevehicle could not be saved. Please, try again.'));
        }
        $users = $this->Likevehicles->Users->find('list', ['limit' => 200]);
        $vehicles = $this->Likevehicles->Vehicles->find('list', ['limit' => 200]);
        $this->set(compact('likevehicle', 'users', 'vehicles'));
        $this->set('_serialize', ['likevehicle']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Likevehicle id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res = array();
        $this->request->allowMethod(['post', 'delete']);
        $likevehicle = $this->Likevehicles->get($id);
        if ($this->Likevehicles->delete($likevehicle)) {
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
