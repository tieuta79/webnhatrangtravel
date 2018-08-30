<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Typehotels Controller
 *
 * @property \App\Model\Table\TypehotelsTable $Typehotels
 *
 * @method \App\Model\Entity\Typehotel[] paginate($object = null, array $settings = [])
 */
class TypehotelsController extends AppController {

    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'view']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {

        $this->paginate = [
            'contain' => ['Hotels']
        ];
        $typehotels = $this->paginate($this->Typehotels);

        $this->loadModel('Typehotels');
        $this->set(compact('typehotels'));
        $this->set('_serialize', ['typehotels']);
    }

    /**
     * View method
     *
     * @param string|null $id Typehotel id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $typehotel = $this->Typehotels->get($id, [
            'contain' => ['Hotels']
        ]);

        $this->set('typehotel', $typehotel);
        $this->set('_serialize', ['typehotel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $typehotel = $this->Typehotels->newEntity();
        if ($this->request->is('post')) {
            $typehotel = $this->Typehotels->patchEntity($typehotel, $this->request->getData());
            if ($this->Typehotels->save($typehotel)) {
                $this->Flash->success(__('The typehotel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typehotel could not be saved. Please, try again.'));
        }
        $this->set(compact('typehotel'));
        $this->set('_serialize', ['typehotel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Typehotel id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $typehotel = $this->Typehotels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typehotel = $this->Typehotels->patchEntity($typehotel, $this->request->getData());
            if ($this->Typehotels->save($typehotel)) {
                $this->Flash->success(__('The typehotel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typehotel could not be saved. Please, try again.'));
        }
        $this->set(compact('typehotel'));
        $this->set('_serialize', ['typehotel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Typehotel id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $typehotel = $this->Typehotels->get($id);
        if ($this->Typehotels->delete($typehotel)) {
            $this->Flash->success(__('The typehotel has been deleted.'));
        } else {
            $this->Flash->error(__('The typehotel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
