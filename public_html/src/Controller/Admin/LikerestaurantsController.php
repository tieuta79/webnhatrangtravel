<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Likerestaurants Controller
 *
 * @property \App\Model\Table\LikerestaurantsTable $Likerestaurants
 *
 * @method \App\Model\Entity\Likerestaurant[] paginate($object = null, array $settings = [])
 */
class LikerestaurantsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Restaurants']
        ];
        $likerestaurants = $this->paginate($this->Likerestaurants);

        $this->set(compact('likerestaurants'));
        $this->set('_serialize', ['likerestaurants']);
    }

    /**
     * View method
     *
     * @param string|null $id Likerestaurant id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $likerestaurant = $this->Likerestaurants->get($id, [
            'contain' => ['Users', 'Restaurants']
        ]);

        $this->set('likerestaurant', $likerestaurant);
        $this->set('_serialize', ['likerestaurant']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $likerestaurant = $this->Likerestaurants->newEntity();
        if ($this->request->is('post')) {
            $likerestaurant = $this->Likerestaurants->patchEntity($likerestaurant, $this->request->getData());
            if ($this->Likerestaurants->save($likerestaurant)) {
                $this->Flash->success(__('The likerestaurant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The likerestaurant could not be saved. Please, try again.'));
        }
        $users = $this->Likerestaurants->Users->find('list', ['limit' => 200]);
        $restaurants = $this->Likerestaurants->Restaurants->find('list', ['limit' => 200]);
        $this->set(compact('likerestaurant', 'users', 'restaurants'));
        $this->set('_serialize', ['likerestaurant']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Likerestaurant id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $likerestaurant = $this->Likerestaurants->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $likerestaurant = $this->Likerestaurants->patchEntity($likerestaurant, $this->request->getData());
            if ($this->Likerestaurants->save($likerestaurant)) {
                $this->Flash->success(__('The likerestaurant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The likerestaurant could not be saved. Please, try again.'));
        }
        $users = $this->Likerestaurants->Users->find('list', ['limit' => 200]);
        $restaurants = $this->Likerestaurants->Restaurants->find('list', ['limit' => 200]);
        $this->set(compact('likerestaurant', 'users', 'restaurants'));
        $this->set('_serialize', ['likerestaurant']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Likerestaurant id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $likerestaurant = $this->Likerestaurants->get($id);
        if ($this->Likerestaurants->delete($likerestaurant)) {
            $this->Flash->success(__('The likerestaurant has been deleted.'));
        } else {
            $this->Flash->error(__('The likerestaurant could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
