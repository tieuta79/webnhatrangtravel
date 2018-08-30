<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Typetours Controller
 *
 * @property \App\Model\Table\TypetoursTable $Typetours
 *
 * @method \App\Model\Entity\Typetour[] paginate($object = null, array $settings = [])
 */
class TypetoursController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $typetours = $this->paginate($this->Typetours);

        $this->set(compact('typetours'));
        $this->set('_serialize', ['typetours']);
    }

    /**
     * View method
     *
     * @param string|null $id Typetour id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typetour = $this->Typetours->get($id, [
            'contain' => []
        ]);

        $this->set('typetour', $typetour);
        $this->set('_serialize', ['typetour']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typetour = $this->Typetours->newEntity();
        if ($this->request->is('post')) {
            $typetour = $this->Typetours->patchEntity($typetour, $this->request->getData());
            if ($this->Typetours->save($typetour)) {
                $this->Flash->success(__('The typetour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typetour could not be saved. Please, try again.'));
        }
        $this->set(compact('typetour'));
        $this->set('_serialize', ['typetour']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Typetour id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typetour = $this->Typetours->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typetour = $this->Typetours->patchEntity($typetour, $this->request->getData());
            if ($this->Typetours->save($typetour)) {
                $this->Flash->success(__('The typetour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typetour could not be saved. Please, try again.'));
        }
        $this->set(compact('typetour'));
        $this->set('_serialize', ['typetour']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Typetour id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typetour = $this->Typetours->get($id);
        if ($this->Typetours->delete($typetour)) {
            $this->Flash->success(__('The typetour has been deleted.'));
        } else {
            $this->Flash->error(__('The typetour could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
