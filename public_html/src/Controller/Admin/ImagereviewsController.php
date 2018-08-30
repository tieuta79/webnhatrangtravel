<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Imagereviews Controller
 *
 * @property \App\Model\Table\ImagereviewsTable $Imagereviews
 *
 * @method \App\Model\Entity\Imagereview[] paginate($object = null, array $settings = [])
 */
class ImagereviewsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Reviews']
        ];
        $imagereviews = $this->paginate($this->Imagereviews);

        $this->set(compact('imagereviews'));
        $this->set('_serialize', ['imagereviews']);
    }

    /**
     * View method
     *
     * @param string|null $id Imagereview id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imagereview = $this->Imagereviews->get($id, [
            'contain' => ['Reviews']
        ]);

        $this->set('imagereview', $imagereview);
        $this->set('_serialize', ['imagereview']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imagereview = $this->Imagereviews->newEntity();
        if ($this->request->is('post')) {
            $imagereview = $this->Imagereviews->patchEntity($imagereview, $this->request->getData());
            if ($this->Imagereviews->save($imagereview)) {
                $this->Flash->success(__('The imagereview has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imagereview could not be saved. Please, try again.'));
        }
        $reviews = $this->Imagereviews->Reviews->find('list', ['limit' => 200]);
        $this->set(compact('imagereview', 'reviews'));
        $this->set('_serialize', ['imagereview']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Imagereview id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imagereview = $this->Imagereviews->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagereview = $this->Imagereviews->patchEntity($imagereview, $this->request->getData());
            if ($this->Imagereviews->save($imagereview)) {
                $this->Flash->success(__('The imagereview has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imagereview could not be saved. Please, try again.'));
        }
        $reviews = $this->Imagereviews->Reviews->find('list', ['limit' => 200]);
        $this->set(compact('imagereview', 'reviews'));
        $this->set('_serialize', ['imagereview']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Imagereview id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imagereview = $this->Imagereviews->get($id);
        if ($this->Imagereviews->delete($imagereview)) {
            $this->Flash->success(__('The imagereview has been deleted.'));
        } else {
            $this->Flash->error(__('The imagereview could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
