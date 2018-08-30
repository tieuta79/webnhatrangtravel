<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Liketours Controller
 *
 * @property \App\Model\Table\LiketoursTable $Liketours
 *
 * @method \App\Model\Entity\Liketour[] paginate($object = null, array $settings = [])
 */
class LiketoursController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Tours']
        ];
        $liketours = $this->paginate($this->Liketours);

        $this->set(compact('liketours'));
        $this->set('_serialize', ['liketours']);
    }

    /**
     * View method
     *
     * @param string|null $id Liketour id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $liketour = $this->Liketours->get($id, [
            'contain' => ['Users', 'Tours']
        ]);

        $this->set('liketour', $liketour);
        $this->set('_serialize', ['liketour']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $liketour = $this->Liketours->newEntity();
        if ($this->request->is('post')) {
            $liketour = $this->Liketours->patchEntity($liketour, $this->request->getData());
            if ($this->Liketours->save($liketour)) {
                $this->Flash->success(__('The liketour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The liketour could not be saved. Please, try again.'));
        }
        $users = $this->Liketours->Users->find('list', ['limit' => 200]);
        $tours = $this->Liketours->Tours->find('list', ['limit' => 200]);
        $this->set(compact('liketour', 'users', 'tours'));
        $this->set('_serialize', ['liketour']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Liketour id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $liketour = $this->Liketours->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $liketour = $this->Liketours->patchEntity($liketour, $this->request->getData());
            if ($this->Liketours->save($liketour)) {
                $this->Flash->success(__('The liketour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The liketour could not be saved. Please, try again.'));
        }
        $users = $this->Liketours->Users->find('list', ['limit' => 200]);
        $tours = $this->Liketours->Tours->find('list', ['limit' => 200]);
        $this->set(compact('liketour', 'users', 'tours'));
        $this->set('_serialize', ['liketour']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Liketour id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $liketour = $this->Liketours->get($id);
        if ($this->Liketours->delete($liketour)) {
            $this->Flash->success(__('The liketour has been deleted.'));
        } else {
            $this->Flash->error(__('The liketour could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
