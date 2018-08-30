<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Imageplaces Controller
 *
 * @property \App\Model\Table\ImageplacesTable $Imageplaces
 *
 * @method \App\Model\Entity\Imageplace[] paginate($object = null, array $settings = [])
 */
class ImageplacesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Places']
        ];
        $imageplaces = $this->paginate($this->Imageplaces);

        $this->set(compact('imageplaces'));
        $this->set('_serialize', ['imageplaces']);
    }

    /**
     * View method
     *
     * @param string|null $id Imageplace id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imageplace = $this->Imageplaces->get($id, [
            'contain' => ['Places']
        ]);

        $this->set('imageplace', $imageplace);
        $this->set('_serialize', ['imageplace']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imageplace = $this->Imageplaces->newEntity();
        if ($this->request->is('post')) {
            $imageplace = $this->Imageplaces->patchEntity($imageplace, $this->request->getData());
            if ($this->Imageplaces->save($imageplace)) {
                $this->Flash->success(__('The imageplace has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imageplace could not be saved. Please, try again.'));
        }
        $places = $this->Imageplaces->Places->find('list', ['limit' => 200]);
        $this->set(compact('imageplace', 'places'));
        $this->set('_serialize', ['imageplace']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Imageplace id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imageplace = $this->Imageplaces->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imageplace = $this->Imageplaces->patchEntity($imageplace, $this->request->getData());
            if ($this->Imageplaces->save($imageplace)) {
                $this->Flash->success(__('The imageplace has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imageplace could not be saved. Please, try again.'));
        }
        $places = $this->Imageplaces->Places->find('list', ['limit' => 200]);
        $this->set(compact('imageplace', 'places'));
        $this->set('_serialize', ['imageplace']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Imageplace id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imageplace = $this->Imageplaces->get($id);
        if ($this->Imageplaces->delete($imageplace)) {
            $this->Flash->success(__('The imageplace has been deleted.'));
        } else {
            $this->Flash->error(__('The imageplace could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
