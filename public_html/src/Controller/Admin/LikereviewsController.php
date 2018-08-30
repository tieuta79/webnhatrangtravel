<?php
namespace App\Controller\Admin;

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
        $likereview = $this->Likereviews->newEntity();
        if ($this->request->is('post')) {
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
        $this->request->allowMethod(['post', 'delete']);
        $likereview = $this->Likereviews->get($id);
        if ($this->Likereviews->delete($likereview)) {
            $this->Flash->success(__('The likereview has been deleted.'));
        } else {
            $this->Flash->error(__('The likereview could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
