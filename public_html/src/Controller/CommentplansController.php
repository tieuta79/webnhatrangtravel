<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Commentplans Controller
 *
 * @property \App\Model\Table\CommentplansTable $Commentplans
 *
 * @method \App\Model\Entity\Commentplan[] paginate($object = null, array $settings = [])
 */
class CommentplansController extends AppController
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
            'contain' => ['Users', 'Plans']
        ];
        $commentplans = $this->paginate($this->Commentplans);

        $this->set(compact('commentplans'));
        $this->set('_serialize', ['commentplans']);
    }

    /**
     * View method
     *
     * @param string|null $id Commentplan id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $commentplan = $this->Commentplans->get($id, [
            'contain' => ['Users', 'Plans']
        ]);

        $this->set('commentplan', $commentplan);
        $this->set('_serialize', ['commentplan']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $res = array();
        $commentplan = $this->Commentplans->newEntity();
        if ($this->request->is('post')) {
            $commentplan = $this->Commentplans->patchEntity($commentplan, $this->request->getData());
            if ($this->Commentplans->save($commentplan)) {
                $res['status'] = 1;
                $res['msg'] = 'Thành công.';
            }
            else {
            $res['status'] = 0;
            $res['msg'] = 'Lỗi.';
        }
            //$this->Flash->error(__('The commentplan could not be saved. Please, try again.'));
        }
        $users = $this->Commentplans->Users->find('list', ['limit' => 200]);
        $plans = $this->Commentplans->Plans->find('list', ['limit' => 200]);
        $this->set(compact('res', 'users', 'plans'));
        $this->set('_serialize', ['res']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Commentplan id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res = array();
        $commentplan = $this->Commentplans->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $commentplan = $this->Commentplans->patchEntity($commentplan, $this->request->getData());
            if ($this->Commentplans->save($commentplan)) {
                $res['status'] = 1;
                $res['msg'] = 'Thành công.';
            }
            else {
            $res['status'] = 0;
            $res['msg'] = 'Lỗi.';
        }
            //$this->Flash->error(__('The commentplan could not be saved. Please, try again.'));
        }
        $users = $this->Commentplans->Users->find('list', ['limit' => 200]);
        $plans = $this->Commentplans->Plans->find('list', ['limit' => 200]);
        $this->set(compact('res', 'users', 'plans'));
        $this->set('_serialize', ['res']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Commentplan id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $commentplan = $this->Commentplans->get($id);
        if ($this->Commentplans->delete($commentplan)) {
            $this->Flash->success(__('The commentplan has been deleted.'));
        } else {
            $this->Flash->error(__('The commentplan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
