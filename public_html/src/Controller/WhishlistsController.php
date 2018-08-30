<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Whishlists Controller
 *
 * @property \App\Model\Table\WhishlistsTable $Whishlists
 *
 * @method \App\Model\Entity\Whishlist[] paginate($object = null, array $settings = [])
 */
class WhishlistsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Hotels', 'Restaurants', 'Tours', 'Vehicles', 'Foods']
        ];
        $whishlists = $this->paginate($this->Whishlists);

        $this->set(compact('whishlists'));
        $this->set('_serialize', ['whishlists']);
    }

    /**
     * View method
     *
     * @param string|null $id Whishlist id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $whishlist = $this->Whishlists->get($id, [
            'contain' => ['Users', 'Hotels', 'Restaurants', 'Tours', 'Vehicles', 'Foods']
        ]);

        $this->set('whishlist', $whishlist);
        $this->set('_serialize', ['whishlist']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $whishlist = $this->Whishlists->newEntity();
        if ($this->request->is('post')) {
            $whishlist = $this->Whishlists->patchEntity($whishlist, $this->request->getData());
            if ($this->Whishlists->save($whishlist)) {
                $this->Flash->success(__('The whishlist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The whishlist could not be saved. Please, try again.'));
        }
        $users = $this->Whishlists->Users->find('list', ['limit' => 200]);
        $hotels = $this->Whishlists->Hotels->find('list', ['limit' => 200]);
        $restaurants = $this->Whishlists->Restaurants->find('list', ['limit' => 200]);
        $tours = $this->Whishlists->Tours->find('list', ['limit' => 200]);
        $vehicles = $this->Whishlists->Vehicles->find('list', ['limit' => 200]);
        $foods = $this->Whishlists->Foods->find('list', ['limit' => 200]);
        $this->set(compact('whishlist', 'users', 'hotels', 'restaurants', 'tours', 'vehicles', 'foods'));
        $this->set('_serialize', ['whishlist']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Whishlist id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $whishlist = $this->Whishlists->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $whishlist = $this->Whishlists->patchEntity($whishlist, $this->request->getData());
            if ($this->Whishlists->save($whishlist)) {
                $this->Flash->success(__('The whishlist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The whishlist could not be saved. Please, try again.'));
        }
        $users = $this->Whishlists->Users->find('list', ['limit' => 200]);
        $hotels = $this->Whishlists->Hotels->find('list', ['limit' => 200]);
        $restaurants = $this->Whishlists->Restaurants->find('list', ['limit' => 200]);
        $tours = $this->Whishlists->Tours->find('list', ['limit' => 200]);
        $vehicles = $this->Whishlists->Vehicles->find('list', ['limit' => 200]);
        $foods = $this->Whishlists->Foods->find('list', ['limit' => 200]);
        $this->set(compact('whishlist', 'users', 'hotels', 'restaurants', 'tours', 'vehicles', 'foods'));
        $this->set('_serialize', ['whishlist']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Whishlist id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $whishlist = $this->Whishlists->get($id);
        if ($this->Whishlists->delete($whishlist)) {
            $this->Flash->success(__('The whishlist has been deleted.'));
        } else {
            $this->Flash->error(__('The whishlist could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
