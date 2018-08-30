<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Imagerestaurants Controller
 *
 * @property \App\Model\Table\ImagerestaurantsTable $Imagerestaurants
 *
 * @method \App\Model\Entity\Imagerestaurant[] paginate($object = null, array $settings = [])
 */
class ImagerestaurantsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Restaurants']
        ];
        $imagerestaurants = $this->paginate($this->Imagerestaurants);

        $this->set(compact('imagerestaurants'));
        $this->set('_serialize', ['imagerestaurants']);
    }

    /**
     * View method
     *
     * @param string|null $id Imagerestaurant id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imagerestaurant = $this->Imagerestaurants->get($id, [
            'contain' => ['Restaurants']
        ]);

        $this->set('imagerestaurant', $imagerestaurant);
        $this->set('_serialize', ['imagerestaurant']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imagerestaurant = $this->Imagerestaurants->newEntity();
        if ($this->request->is('post')) {
            $imagerestaurant = $this->Imagerestaurants->patchEntity($imagerestaurant, $this->request->getData());
            if ($this->Imagerestaurants->save($imagerestaurant)) {
                $this->Flash->success(__('The imagerestaurant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imagerestaurant could not be saved. Please, try again.'));
        }
        $restaurants = $this->Imagerestaurants->Restaurants->find('list', ['limit' => 200]);
        $this->set(compact('imagerestaurant', 'restaurants'));
        $this->set('_serialize', ['imagerestaurant']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Imagerestaurant id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imagerestaurant = $this->Imagerestaurants->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagerestaurant = $this->Imagerestaurants->patchEntity($imagerestaurant, $this->request->getData());
            if ($this->Imagerestaurants->save($imagerestaurant)) {
                $this->Flash->success(__('The imagerestaurant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imagerestaurant could not be saved. Please, try again.'));
        }
        $restaurants = $this->Imagerestaurants->Restaurants->find('list', ['limit' => 200]);
        $this->set(compact('imagerestaurant', 'restaurants'));
        $this->set('_serialize', ['imagerestaurant']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Imagerestaurant id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imagerestaurant = $this->Imagerestaurants->get($id);
        if ($this->Imagerestaurants->delete($imagerestaurant)) {
            $this->Flash->success(__('The imagerestaurant has been deleted.'));
        } else {
            $this->Flash->error(__('The imagerestaurant could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
