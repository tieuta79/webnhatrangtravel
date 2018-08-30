<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Imageevents Controller
 *
 * @property \App\Model\Table\ImageeventsTable $Imageevents
 *
 * @method \App\Model\Entity\Imageevent[] paginate($object = null, array $settings = [])
 */
class ImageeventsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Events']
        ];
        $imageevents = $this->paginate($this->Imageevents);

        $this->set(compact('imageevents'));
        $this->set('_serialize', ['imageevents']);
    }

    /**
     * View method
     *
     * @param string|null $id Imageevent id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imageevent = $this->Imageevents->get($id, [
            'contain' => ['Events']
        ]);

        $this->set('imageevent', $imageevent);
        $this->set('_serialize', ['imageevent']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imageevent = $this->Imageevents->newEntity();
        if ($this->request->is('post')) {
            $imageevent = $this->Imageevents->patchEntity($imageevent, $this->request->getData());
            if ($this->Imageevents->save($imageevent)) {
                $this->Flash->success(__('The imageevent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imageevent could not be saved. Please, try again.'));
        }
        $events = $this->Imageevents->Events->find('list', ['limit' => 200]);
        $this->set(compact('imageevent', 'events'));
        $this->set('_serialize', ['imageevent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Imageevent id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imageevent = $this->Imageevents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imageevent = $this->Imageevents->patchEntity($imageevent, $this->request->getData());
            if ($this->Imageevents->save($imageevent)) {
                $this->Flash->success(__('The imageevent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imageevent could not be saved. Please, try again.'));
        }
        $events = $this->Imageevents->Events->find('list', ['limit' => 200]);
        $this->set(compact('imageevent', 'events'));
        $this->set('_serialize', ['imageevent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Imageevent id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imageevent = $this->Imageevents->get($id);
        if ($this->Imageevents->delete($imageevent)) {
            $this->Flash->success(__('The imageevent has been deleted.'));
        } else {
            $this->Flash->error(__('The imageevent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
