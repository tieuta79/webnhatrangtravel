<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Likehotels Controller
 *
 * @property \App\Model\Table\LikehotelsTable $Likehotels
 *
 * @method \App\Model\Entity\Likehotel[] paginate($object = null, array $settings = [])
 */
class LikehotelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Hotels']
        ];
        $likehotels = $this->paginate($this->Likehotels);

        $this->set(compact('likehotels'));
        $this->set('_serialize', ['likehotels']);
    }

    /**
     * View method
     *
     * @param string|null $id Likehotel id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $likehotel = $this->Likehotels->get($id, [
            'contain' => ['Users', 'Hotels']
        ]);

        $this->set('likehotel', $likehotel);
        $this->set('_serialize', ['likehotel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $likehotel = $this->Likehotels->newEntity();
        if ($this->request->is('post')) {
            $likehotel = $this->Likehotels->patchEntity($likehotel, $this->request->getData());
            if ($this->Likehotels->save($likehotel)) {
                $this->Flash->success(__('The likehotel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The likehotel could not be saved. Please, try again.'));
        }
        $users = $this->Likehotels->Users->find('list', ['limit' => 200]);
        $hotels = $this->Likehotels->Hotels->find('list', ['limit' => 200]);
        $this->set(compact('likehotel', 'users', 'hotels'));
        $this->set('_serialize', ['likehotel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Likehotel id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $likehotel = $this->Likehotels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $likehotel = $this->Likehotels->patchEntity($likehotel, $this->request->getData());
            if ($this->Likehotels->save($likehotel)) {
                $this->Flash->success(__('The likehotel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The likehotel could not be saved. Please, try again.'));
        }
        $users = $this->Likehotels->Users->find('list', ['limit' => 200]);
        $hotels = $this->Likehotels->Hotels->find('list', ['limit' => 200]);
        $this->set(compact('likehotel', 'users', 'hotels'));
        $this->set('_serialize', ['likehotel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Likehotel id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $likehotel = $this->Likehotels->get($id);
        if ($this->Likehotels->delete($likehotel)) {
            $this->Flash->success(__('The likehotel has been deleted.'));
        } else {
            $this->Flash->error(__('The likehotel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
