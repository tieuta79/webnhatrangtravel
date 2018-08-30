<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Typereviews Controller
 *
 * @property \App\Model\Table\TypereviewsTable $Typereviews
 *
 * @method \App\Model\Entity\Typereview[] paginate($object = null, array $settings = [])
 */
class TypereviewsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $typereviews = $this->paginate($this->Typereviews);

        $this->set(compact('typereviews'));
        $this->set('_serialize', ['typereviews']);
    }

    /**
     * View method
     *
     * @param string|null $id Typereview id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typereview = $this->Typereviews->get($id, [
            'contain' => ['Reviews']
        ]);

        $this->set('typereview', $typereview);
        $this->set('_serialize', ['typereview']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typereview = $this->Typereviews->newEntity();
        if ($this->request->is('post')) {
            $typereview = $this->Typereviews->patchEntity($typereview, $this->request->getData());
            if ($this->Typereviews->save($typereview)) {
                $this->Flash->success(__('The typereview has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typereview could not be saved. Please, try again.'));
        }
        $this->set(compact('typereview'));
        $this->set('_serialize', ['typereview']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Typereview id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typereview = $this->Typereviews->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typereview = $this->Typereviews->patchEntity($typereview, $this->request->getData());
            if ($this->Typereviews->save($typereview)) {
                $this->Flash->success(__('The typereview has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typereview could not be saved. Please, try again.'));
        }
        $this->set(compact('typereview'));
        $this->set('_serialize', ['typereview']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Typereview id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typereview = $this->Typereviews->get($id);
        if ($this->Typereviews->delete($typereview)) {
            $this->Flash->success(__('The typereview has been deleted.'));
        } else {
            $this->Flash->error(__('The typereview could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
