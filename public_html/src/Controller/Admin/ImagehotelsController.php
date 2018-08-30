<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Imagehotels Controller
 *
 * @property \App\Model\Table\ImagehotelsTable $Imagehotels
 *
 * @method \App\Model\Entity\Imagehotel[] paginate($object = null, array $settings = [])
 */
class ImagehotelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Hotels']
        ];
        $imagehotels = $this->paginate($this->Imagehotels);

        $this->set(compact('imagehotels'));
        $this->set('_serialize', ['imagehotels']);
    }

    /**
     * View method
     *
     * @param string|null $id Imagehotel id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imagehotel = $this->Imagehotels->get($id, [
            'contain' => ['Hotels']
        ]);

        $this->set('imagehotel', $imagehotel);
        $this->set('_serialize', ['imagehotel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imagehotel = $this->Imagehotels->newEntity();
        if ($this->request->is('post')) {
            $imagehotel = $this->Imagehotels->patchEntity($imagehotel, $this->request->getData());
            if ($this->Imagehotels->save($imagehotel)) {
                $this->Flash->success(__('The imagehotel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imagehotel could not be saved. Please, try again.'));
        }
        $hotels = $this->Imagehotels->Hotels->find('list', ['limit' => 200]);
        $this->set(compact('imagehotel', 'hotels'));
        $this->set('_serialize', ['imagehotel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Imagehotel id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imagehotel = $this->Imagehotels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagehotel = $this->Imagehotels->patchEntity($imagehotel, $this->request->getData());
            if ($this->Imagehotels->save($imagehotel)) {
                $this->Flash->success(__('The imagehotel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imagehotel could not be saved. Please, try again.'));
        }
        $hotels = $this->Imagehotels->Hotels->find('list', ['limit' => 200]);
        $this->set(compact('imagehotel', 'hotels'));
        $this->set('_serialize', ['imagehotel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Imagehotel id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imagehotel = $this->Imagehotels->get($id);
        if ($this->Imagehotels->delete($imagehotel)) {
            $this->Flash->success(__('The imagehotel has been deleted.'));
        } else {
            $this->Flash->error(__('The imagehotel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
