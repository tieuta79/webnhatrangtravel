<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Imagetours Controller
 *
 * @property \App\Model\Table\ImagetoursTable $Imagetours
 *
 * @method \App\Model\Entity\Imagetour[] paginate($object = null, array $settings = [])
 */
class ImagetoursController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tours']
        ];
        $imagetours = $this->paginate($this->Imagetours);

        $this->set(compact('imagetours'));
        $this->set('_serialize', ['imagetours']);
    }

    /**
     * View method
     *
     * @param string|null $id Imagetour id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imagetour = $this->Imagetours->get($id, [
            'contain' => ['Tours']
        ]);

        $this->set('imagetour', $imagetour);
        $this->set('_serialize', ['imagetour']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imagetour = $this->Imagetours->newEntity();
        if ($this->request->is('post')) {
            $imagetour = $this->Imagetours->patchEntity($imagetour, $this->request->getData());
            if ($this->Imagetours->save($imagetour)) {
                $this->Flash->success(__('The imagetour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imagetour could not be saved. Please, try again.'));
        }
        $tours = $this->Imagetours->Tours->find('list', ['limit' => 200]);
        $this->set(compact('imagetour', 'tours'));
        $this->set('_serialize', ['imagetour']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Imagetour id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imagetour = $this->Imagetours->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagetour = $this->Imagetours->patchEntity($imagetour, $this->request->getData());
            if ($this->Imagetours->save($imagetour)) {
                $this->Flash->success(__('The imagetour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imagetour could not be saved. Please, try again.'));
        }
        $tours = $this->Imagetours->Tours->find('list', ['limit' => 200]);
        $this->set(compact('imagetour', 'tours'));
        $this->set('_serialize', ['imagetour']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Imagetour id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imagetour = $this->Imagetours->get($id);
        if ($this->Imagetours->delete($imagetour)) {
            $this->Flash->success(__('The imagetour has been deleted.'));
        } else {
            $this->Flash->error(__('The imagetour could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
