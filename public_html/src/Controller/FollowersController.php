<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Followers Controller
 *
 * @property \App\Model\Table\FollowersTable $Followers
 *
 * @method \App\Model\Entity\Follower[] paginate($object = null, array $settings = [])
 */
class FollowersController extends AppController
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
        $followers = $this->paginate($this->Followers);

        $this->set(compact('followers'));
        $this->set('_serialize', ['followers']);
    }

    /**
     * View method
     *
     * @param string|null $id Follower id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $follower = $this->Followers->get($id, [
            'contain' => ['Users', 'Followers']
        ]);

        $this->set('follower', $follower);
        $this->set('_serialize', ['follower']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $follower = $this->Followers->newEntity();
        if ($this->request->is('post')) {
            $follower = $this->Followers->patchEntity($follower, $this->request->getData());
            if ($this->Followers->save($follower)) {
                $this->Flash->success(__('The follower has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The follower could not be saved. Please, try again.'));
        }
        $users = $this->Followers->Users->find('list', ['limit' => 200]);
        $this->set(compact('follower', 'users'));
        $this->set('_serialize', ['follower']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Follower id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $follower = $this->Followers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $follower = $this->Followers->patchEntity($follower, $this->request->getData());
            if ($this->Followers->save($follower)) {
                $this->Flash->success(__('The follower has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The follower could not be saved. Please, try again.'));
        }
        $users = $this->Followers->Users->find('list', ['limit' => 200]);
        $this->set(compact('follower', 'users'));
        $this->set('_serialize', ['follower']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Follower id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $follower = $this->Followers->get($id);
        if ($this->Followers->delete($follower)) {
            $this->Flash->success(__('The follower has been deleted.'));
        } else {
            $this->Flash->error(__('The follower could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
