<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Imageregions Controller
 *
 * @property \App\Model\Table\ImageregionsTable $Imageregions
 *
 * @method \App\Model\Entity\Imageregion[] paginate($object = null, array $settings = [])
 */
class ImageregionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Regions']
        ];
        $imageregions = $this->paginate($this->Imageregions);

        $this->set(compact('imageregions'));
        $this->set('_serialize', ['imageregions']);
    }

    /**
     * View method
     *
     * @param string|null $id Imageregion id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imageregion = $this->Imageregions->get($id, [
            'contain' => ['Regions']
        ]);

        $this->set('imageregion', $imageregion);
        $this->set('_serialize', ['imageregion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imageregion = $this->Imageregions->newEntity();
        if ($this->request->is('post')) {
            $imageregion = $this->Imageregions->patchEntity($imageregion, $this->request->getData());
            if ($this->Imageregions->save($imageregion)) {
                $this->Flash->success(__('The imageregion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imageregion could not be saved. Please, try again.'));
        }
        $regions = $this->Imageregions->Regions->find('list', ['limit' => 200]);
        $this->set(compact('imageregion', 'regions'));
        $this->set('_serialize', ['imageregion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Imageregion id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imageregion = $this->Imageregions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imageregion = $this->Imageregions->patchEntity($imageregion, $this->request->getData());
            if ($this->Imageregions->save($imageregion)) {
                $this->Flash->success(__('The imageregion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imageregion could not be saved. Please, try again.'));
        }
        $regions = $this->Imageregions->Regions->find('list', ['limit' => 200]);
        $this->set(compact('imageregion', 'regions'));
        $this->set('_serialize', ['imageregion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Imageregion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imageregion = $this->Imageregions->get($id);
        if ($this->Imageregions->delete($imageregion)) {
            $this->Flash->success(__('The imageregion has been deleted.'));
        } else {
            $this->Flash->error(__('The imageregion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
