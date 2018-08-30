<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ratevehicles Controller
 *
 * @property \App\Model\Table\RatevehiclesTable $Ratevehicles
 *
 * @method \App\Model\Entity\Ratevehicle[] paginate($object = null, array $settings = [])
 */
class RatevehiclesController extends AppController
{
	public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'view', 'add']);
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
        $ratevehicles = $this->paginate($this->Ratevehicles);

        $this->set(compact('ratevehicles'));
        $this->set('_serialize', ['ratevehicles']);
    }

    /**
     * View method
     *
     * @param string|null $id Ratevehicle id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ratevehicle = $this->Ratevehicles->get($id, [
            'contain' => ['Users', 'Vehicles']
        ]);

        $this->set('ratevehicle', $ratevehicle);
        $this->set('_serialize', ['ratevehicle']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ratevehicle = $this->Ratevehicles->newEntity();
        if ($this->request->is('post')) {
            $ratevehicle = $this->Ratevehicles->patchEntity($ratevehicle, $this->request->getData());
            if ($this->Ratevehicles->save($ratevehicle)) {
                $this->Flash->success(__('The ratevehicle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ratevehicle could not be saved. Please, try again.'));
        }
        $users = $this->Ratevehicles->Users->find('list', ['limit' => 200]);
        $vehicles = $this->Ratevehicles->Vehicles->find('list', ['limit' => 200]);
        $this->set(compact('ratevehicle', 'users', 'vehicles'));
        $this->set('_serialize', ['ratevehicle']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ratevehicle id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ratevehicle = $this->Ratevehicles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ratevehicle = $this->Ratevehicles->patchEntity($ratevehicle, $this->request->getData());
            if ($this->Ratevehicles->save($ratevehicle)) {
                $this->Flash->success(__('The ratevehicle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ratevehicle could not be saved. Please, try again.'));
        }
        $users = $this->Ratevehicles->Users->find('list', ['limit' => 200]);
        $vehicles = $this->Ratevehicles->Vehicles->find('list', ['limit' => 200]);
        $this->set(compact('ratevehicle', 'users', 'vehicles'));
        $this->set('_serialize', ['ratevehicle']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ratevehicle id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ratevehicle = $this->Ratevehicles->get($id);
        if ($this->Ratevehicles->delete($ratevehicle)) {
            $this->Flash->success(__('The ratevehicle has been deleted.'));
        } else {
            $this->Flash->error(__('The ratevehicle could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
