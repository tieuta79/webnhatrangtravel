<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Likeplans Controller
 *
 * @property \App\Model\Table\LikeplansTable $Likeplans
 *
 * @method \App\Model\Entity\Likeplan[] paginate($object = null, array $settings = [])
 */
class LikeplansController extends AppController
{

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
        $likeplans = $this->paginate($this->Likeplans);

        $this->set(compact('likeplans'));
        $this->set('_serialize', ['likeplans']);
    }

    /**
     * View method
     *
     * @param string|null $id Likeplan id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $likeplan = $this->Likeplans->get($id, [
            'contain' => ['Users', 'Plans']
        ]);

        $this->set('likeplan', $likeplan);
        $this->set('_serialize', ['likeplan']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $likeplan = $this->Likeplans->newEntity();
        if ($this->request->is('post')) {
            $likeplan = $this->Likeplans->patchEntity($likeplan, $this->request->getData());
            if ($this->Likeplans->save($likeplan)) {
                $this->Flash->success(__('The likeplan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The likeplan could not be saved. Please, try again.'));
        }
        $users = $this->Likeplans->Users->find('list', ['limit' => 200]);
        $plans = $this->Likeplans->Plans->find('list', ['limit' => 200]);
        $this->set(compact('likeplan', 'users', 'plans'));
        $this->set('_serialize', ['likeplan']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Likeplan id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $likeplan = $this->Likeplans->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $likeplan = $this->Likeplans->patchEntity($likeplan, $this->request->getData());
            if ($this->Likeplans->save($likeplan)) {
                $this->Flash->success(__('The likeplan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The likeplan could not be saved. Please, try again.'));
        }
        $users = $this->Likeplans->Users->find('list', ['limit' => 200]);
        $plans = $this->Likeplans->Plans->find('list', ['limit' => 200]);
        $this->set(compact('likeplan', 'users', 'plans'));
        $this->set('_serialize', ['likeplan']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Likeplan id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $likeplan = $this->Likeplans->get($id);
        if ($this->Likeplans->delete($likeplan)) {
            $this->Flash->success(__('The likeplan has been deleted.'));
        } else {
            $this->Flash->error(__('The likeplan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
