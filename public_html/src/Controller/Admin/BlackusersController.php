<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Blackusers Controller
 *
 * @property \App\Model\Table\BlackusersTable $Blackusers
 *
 * @method \App\Model\Entity\Blackuser[] paginate($object = null, array $settings = [])
 */
class BlackusersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $blackusers = $this->paginate($this->Blackusers);

        $this->set(compact('blackusers'));
        $this->set('_serialize', ['blackusers']);
    }

    /**
     * View method
     *
     * @param string|null $id Blackuser id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $blackuser = $this->Blackusers->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('blackuser', $blackuser);
        $this->set('_serialize', ['blackuser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $blackuser = $this->Blackusers->newEntity();
        if ($this->request->is('post')) {
            $blackuser = $this->Blackusers->patchEntity($blackuser, $this->request->getData());
            if ($this->Blackusers->save($blackuser)) {
                $this->Flash->success(__('The blackuser has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blackuser could not be saved. Please, try again.'));
        }
        $users = $this->Blackusers->Users->find('list', ['limit' => 200]);
        $this->set(compact('blackuser', 'users'));
        $this->set('_serialize', ['blackuser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Blackuser id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $blackuser = $this->Blackusers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $blackuser = $this->Blackusers->patchEntity($blackuser, $this->request->getData());
            if ($this->Blackusers->save($blackuser)) {
                $this->Flash->success(__('The blackuser has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blackuser could not be saved. Please, try again.'));
        }
        $users = $this->Blackusers->Users->find('list', ['limit' => 200]);
        $this->set(compact('blackuser', 'users'));
        $this->set('_serialize', ['blackuser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Blackuser id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $blackuser = $this->Blackusers->get($id);
        if ($this->Blackusers->delete($blackuser)) {
            $this->Flash->success(__('The blackuser has been deleted.'));
        } else {
            $this->Flash->error(__('The blackuser could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
