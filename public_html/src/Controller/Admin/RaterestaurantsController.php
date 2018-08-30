<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Raterestaurants Controller
 *
 * @property \App\Model\Table\RaterestaurantsTable $Raterestaurants
 *
 * @method \App\Model\Entity\Raterestaurant[] paginate($object = null, array $settings = [])
 */
class RaterestaurantsController extends AppController
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
        $raterestaurants = $this->paginate($this->Raterestaurants);

        $this->set(compact('raterestaurants'));
        $this->set('_serialize', ['raterestaurants']);
    }

    /**
     * View method
     *
     * @param string|null $id Raterestaurant id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $raterestaurant = $this->Raterestaurants->get($id, [
            'contain' => ['Users', 'Restaurants']
        ]);

        $this->set('raterestaurant', $raterestaurant);
        $this->set('_serialize', ['raterestaurant']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $raterestaurant = $this->Raterestaurants->newEntity();
        if ($this->request->is('post')) {
            $raterestaurant = $this->Raterestaurants->patchEntity($raterestaurant, $this->request->getData());
            if ($this->Raterestaurants->save($raterestaurant)) {
                $this->Flash->success(__('The raterestaurant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The raterestaurant could not be saved. Please, try again.'));
        }
        $users = $this->Raterestaurants->Users->find('list', ['limit' => 200]);
        $restaurants = $this->Raterestaurants->Restaurants->find('list', ['limit' => 200]);
        $this->set(compact('raterestaurant', 'users', 'restaurants'));
        $this->set('_serialize', ['raterestaurant']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Raterestaurant id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $raterestaurant = $this->Raterestaurants->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $raterestaurant = $this->Raterestaurants->patchEntity($raterestaurant, $this->request->getData());
            if ($this->Raterestaurants->save($raterestaurant)) {
                $this->Flash->success(__('The raterestaurant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The raterestaurant could not be saved. Please, try again.'));
        }
        $users = $this->Raterestaurants->Users->find('list', ['limit' => 200]);
        $restaurants = $this->Raterestaurants->Restaurants->find('list', ['limit' => 200]);
        $this->set(compact('raterestaurant', 'users', 'restaurants'));
        $this->set('_serialize', ['raterestaurant']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Raterestaurant id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $raterestaurant = $this->Raterestaurants->get($id);
        if ($this->Raterestaurants->delete($raterestaurant)) {
            $this->Flash->success(__('The raterestaurant has been deleted.'));
        } else {
            $this->Flash->error(__('The raterestaurant could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
