<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Typevehicles Controller
 *
 * @property \App\Model\Table\TypevehiclesTable $Typevehicles
 *
 * @method \App\Model\Entity\Typevehicle[] paginate($object = null, array $settings = [])
 */
class TypevehiclesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $typevehicles = $this->paginate($this->Typevehicles);

        $this->set(compact('typevehicles'));
        $this->set('_serialize', ['typevehicles']);
    }

    /**
     * View method
     *
     * @param string|null $id Typevehicle id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typevehicle = $this->Typevehicles->get($id, [
            'contain' => ['Vehicles']
        ]);

        $this->set('typevehicle', $typevehicle);
        $this->set('_serialize', ['typevehicle']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typevehicle = $this->Typevehicles->newEntity();
        if ($this->request->is('post')) {
            $typevehicle = $this->Typevehicles->patchEntity($typevehicle, $this->request->getData());
            if ($this->Typevehicles->save($typevehicle)) {
                $this->Flash->success(__('The typevehicle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typevehicle could not be saved. Please, try again.'));
        }
        $this->set(compact('typevehicle'));
        $this->set('_serialize', ['typevehicle']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Typevehicle id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typevehicle = $this->Typevehicles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typevehicle = $this->Typevehicles->patchEntity($typevehicle, $this->request->getData());
            if ($this->Typevehicles->save($typevehicle)) {
                $this->Flash->success(__('The typevehicle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typevehicle could not be saved. Please, try again.'));
        }
        $this->set(compact('typevehicle'));
        $this->set('_serialize', ['typevehicle']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Typevehicle id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typevehicle = $this->Typevehicles->get($id);
        if ($this->Typevehicles->delete($typevehicle)) {
            $this->Flash->success(__('The typevehicle has been deleted.'));
        } else {
            $this->Flash->error(__('The typevehicle could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
