<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Rateevents Controller
 *
 * @property \App\Model\Table\RateeventsTable $Rateevents
 *
 * @method \App\Model\Entity\Rateevent[] paginate($object = null, array $settings = [])
 */
class RateeventsController extends AppController {

    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'view', 'add', 'edit']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Users', 'Events']
        ];
        $rateevents = $this->paginate($this->Rateevents);

        $this->set(compact('rateevents'));
        $this->set('_serialize', ['rateevents']);
    }

    /**
     * View method
     *
     * @param string|null $id Rateevent id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $rateevent = $this->Rateevents->get($id, [
            'contain' => ['Users', 'Events']
        ]);

        $this->set('rateevent', $rateevent);
        $this->set('_serialize', ['rateevent']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $rateevent = $this->Rateevents->newEntity();
        $res = array();
        if ($this->request->is('post')) {
            $rateevent = $this->Rateevents->patchEntity($rateevent, $this->request->getData());
            if ($this->Rateevents->save($rateevent)) {
                $res['status'] = 1;
                $res['msg'] = 'Thành công.';

                //return $this->redirect(['action' => 'index']);
            } else {
                $res['status'] = 0;
                $res['msg'] = 'Lỗi.';
            }
            //$this->Flash->error(__('The rateevent could not be saved. Please, try again.'));
        }
        $users = $this->Rateevents->Users->find('list', ['limit' => 200]);
        $events = $this->Rateevents->Events->find('list', ['limit' => 200]);
        $this->set(compact('res', 'users', 'events'));
        $this->set('_serialize', ['res']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Rateevent id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $rateevent = $this->Rateevents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rateevent = $this->Rateevents->patchEntity($rateevent, $this->request->getData());
            if ($this->Rateevents->save($rateevent)) {
                $this->Flash->success(__('The rateevent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rateevent could not be saved. Please, try again.'));
        }
        $users = $this->Rateevents->Users->find('list', ['limit' => 200]);
        $events = $this->Rateevents->Events->find('list', ['limit' => 200]);
        $this->set(compact('rateevent', 'users', 'events'));
        $this->set('_serialize', ['rateevent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Rateevent id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $res = array();
        $this->request->allowMethod(['post', 'delete']);
        $rateevent = $this->Rateevents->get($id);
        if ($this->Rateevents->delete($rateevent)) {
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
