<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Plans Controller
 *
 * @property \App\Model\Table\PlansTable $Plans
 *
 * @method \App\Model\Entity\Plan[] paginate($object = null, array $settings = [])
 */
class PlansController extends AppController {

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
            'contain' => ['Users', 'Likeplans', 'Commentplans']
        ];
        $plans = $this->paginate($this->Plans);

        $this->set(compact('plans'));
        $this->set('_serialize', ['plans']);
    }

    /**
     * View method
     *
     * @param string|null $id Plan id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $plan = $this->Plans->get($id, [
            'contain' => ['Users', 'Likeplans', 'Commentplans']
        ]);
        $this->loadModel('Commentplans');
        $this->loadModel('Users');
        $commentplans = $this->Commentplans->find()->contain(['Users'])->where(['Commentplans.plan_id' => $plan->id]);
        $this->set(compact('plan', 'commentplans'));
        $this->set('_serialize', ['plan', 'commentplans']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $res = array();
        $plan = $this->Plans->newEntity();
        if ($this->request->is('post')) {
            $plan = $this->Plans->patchEntity($plan, $this->request->getData());
            if ($this->Plans->save($plan)) {
                $res['status'] = 1;
                $res['msg'] = 'Thành công.';
            }
            else {
            $res['status'] = 0;
            $res['msg'] = 'Lỗi.';
        }
            //$this->Flash->error(__('The plan could not be saved. Please, try again.'));
        }
        $users = $this->Plans->Users->find('list', ['limit' => 200]);
        $this->set(compact('res', 'users'));
        $this->set('_serialize', ['res']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Plan id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $plan = $this->Plans->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $plan = $this->Plans->patchEntity($plan, $this->request->getData());
            if ($this->Plans->save($plan)) {
                $this->Flash->success(__('The plan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The plan could not be saved. Please, try again.'));
        }
        $users = $this->Plans->Users->find('list', ['limit' => 200]);
        $this->set(compact('plan', 'users'));
        $this->set('_serialize', ['plan']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Plan id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $plan = $this->Plans->get($id);
        if ($this->Plans->delete($plan)) {
            $this->Flash->success(__('The plan has been deleted.'));
        } else {
            $this->Flash->error(__('The plan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
