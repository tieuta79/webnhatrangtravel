<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Preferentials Controller
 *
 * @property \App\Model\Table\PreferentialsTable $Preferentials
 *
 * @method \App\Model\Entity\Preferential[] paginate($object = null, array $settings = [])
 */
class PreferentialsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Rooms']
        ];
        $preferentials = $this->paginate($this->Preferentials);

        $this->set(compact('preferentials'));
        $this->set('_serialize', ['preferentials']);
    }

    /**
     * View method
     *
     * @param string|null $id Preferential id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $preferential = $this->Preferentials->get($id, [
            'contain' => ['Rooms']
        ]);

        $this->set('preferential', $preferential);
        $this->set('_serialize', ['preferential']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $preferential = $this->Preferentials->newEntity();
        if ($this->request->is('post')) {
            $preferential = $this->Preferentials->patchEntity($preferential, $this->request->getData());
            if ($this->Preferentials->save($preferential)) {
                $this->Flash->success(__('The preferential has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The preferential could not be saved. Please, try again.'));
        }
        $rooms = $this->Preferentials->Rooms->find('list', ['limit' => 200]);
        $this->set(compact('preferential', 'rooms'));
        $this->set('_serialize', ['preferential']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Preferential id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $preferential = $this->Preferentials->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $preferential = $this->Preferentials->patchEntity($preferential, $this->request->getData());
            if ($this->Preferentials->save($preferential)) {
                $this->Flash->success(__('The preferential has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The preferential could not be saved. Please, try again.'));
        }
        $rooms = $this->Preferentials->Rooms->find('list', ['limit' => 200]);
        $this->set(compact('preferential', 'rooms'));
        $this->set('_serialize', ['preferential']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Preferential id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $preferential = $this->Preferentials->get($id);
        if ($this->Preferentials->delete($preferential)) {
            $this->Flash->success(__('The preferential has been deleted.'));
        } else {
            $this->Flash->error(__('The preferential could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
