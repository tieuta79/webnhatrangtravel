<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Ratetours Controller
 *
 * @property \App\Model\Table\RatetoursTable $Ratetours
 *
 * @method \App\Model\Entity\Ratetour[] paginate($object = null, array $settings = [])
 */
class RatetoursController extends AppController
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
        $ratetours = $this->paginate($this->Ratetours);

        $this->set(compact('ratetours'));
        $this->set('_serialize', ['ratetours']);
    }

    /**
     * View method
     *
     * @param string|null $id Ratetour id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ratetour = $this->Ratetours->get($id, [
            'contain' => ['Users', 'Tours']
        ]);

        $this->set('ratetour', $ratetour);
        $this->set('_serialize', ['ratetour']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ratetour = $this->Ratetours->newEntity();
        if ($this->request->is('post')) {
            $ratetour = $this->Ratetours->patchEntity($ratetour, $this->request->getData());
            if ($this->Ratetours->save($ratetour)) {
                $this->Flash->success(__('The ratetour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ratetour could not be saved. Please, try again.'));
        }
        $users = $this->Ratetours->Users->find('list', ['limit' => 200]);
        $tours = $this->Ratetours->Tours->find('list', ['limit' => 200]);
        $this->set(compact('ratetour', 'users', 'tours'));
        $this->set('_serialize', ['ratetour']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ratetour id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ratetour = $this->Ratetours->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ratetour = $this->Ratetours->patchEntity($ratetour, $this->request->getData());
            if ($this->Ratetours->save($ratetour)) {
                $this->Flash->success(__('The ratetour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ratetour could not be saved. Please, try again.'));
        }
        $users = $this->Ratetours->Users->find('list', ['limit' => 200]);
        $tours = $this->Ratetours->Tours->find('list', ['limit' => 200]);
        $this->set(compact('ratetour', 'users', 'tours'));
        $this->set('_serialize', ['ratetour']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ratetour id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ratetour = $this->Ratetours->get($id);
        if ($this->Ratetours->delete($ratetour)) {
            $this->Flash->success(__('The ratetour has been deleted.'));
        } else {
            $this->Flash->error(__('The ratetour could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
