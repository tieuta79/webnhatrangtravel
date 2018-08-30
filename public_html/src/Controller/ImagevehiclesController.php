<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Imagevehicles Controller
 *
 * @property \App\Model\Table\ImagevehiclesTable $Imagevehicles
 *
 * @method \App\Model\Entity\Imagevehicle[] paginate($object = null, array $settings = [])
 */
class ImagevehiclesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Vehicles']
        ];
        $imagevehicles = $this->paginate($this->Imagevehicles);

        $this->set(compact('imagevehicles'));
        $this->set('_serialize', ['imagevehicles']);
    }

    /**
     * View method
     *
     * @param string|null $id Imagevehicle id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imagevehicle = $this->Imagevehicles->get($id, [
            'contain' => ['Vehicles']
        ]);

        $this->set('imagevehicle', $imagevehicle);
        $this->set('_serialize', ['imagevehicle']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imagevehicle = $this->Imagevehicles->newEntity();
        if ($this->request->is('post')) {
            $imagevehicle = $this->Imagevehicles->patchEntity($imagevehicle, $this->request->getData());
            if ($this->Imagevehicles->save($imagevehicle)) {
                $this->Flash->success(__('The imagevehicle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imagevehicle could not be saved. Please, try again.'));
        }
        $vehicles = $this->Imagevehicles->Vehicles->find('list', ['limit' => 200]);
        $this->set(compact('imagevehicle', 'vehicles'));
        $this->set('_serialize', ['imagevehicle']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Imagevehicle id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imagevehicle = $this->Imagevehicles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagevehicle = $this->Imagevehicles->patchEntity($imagevehicle, $this->request->getData());
            if ($this->Imagevehicles->save($imagevehicle)) {
                $this->Flash->success(__('The imagevehicle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imagevehicle could not be saved. Please, try again.'));
        }
        $vehicles = $this->Imagevehicles->Vehicles->find('list', ['limit' => 200]);
        $this->set(compact('imagevehicle', 'vehicles'));
        $this->set('_serialize', ['imagevehicle']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Imagevehicle id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imagevehicle = $this->Imagevehicles->get($id);
        if ($this->Imagevehicles->delete($imagevehicle)) {
            $this->Flash->success(__('The imagevehicle has been deleted.'));
        } else {
            $this->Flash->error(__('The imagevehicle could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
