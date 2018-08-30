<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Hotels Controller
 *
 * @property \App\Model\Table\HotelsTable $Hotels
 *
 * @method \App\Model\Entity\Hotel[] paginate($object = null, array $settings = [])
 */
class HotelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Regions', 'Typehotels']
        ];
        $hotels = $this->paginate($this->Hotels);

        $this->set(compact('hotels'));
        $this->set('_serialize', ['hotels']);
    }

    /**
     * View method
     *
     * @param string|null $id Hotel id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hotel = $this->Hotels->get($id, [
            'contain' => ['Users', 'Regions', 'Typehotels', 'Imagehotels', 'Rooms']
        ]);

        $this->set('hotel', $hotel);
        $this->set('_serialize', ['hotel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hotel = $this->Hotels->newEntity();
        if ($this->request->is('post')) {
            $hotel = $this->Hotels->patchEntity($hotel, $this->request->getData());
            if ($this->Hotels->save($hotel)) {
                $this->Flash->success(__('The hotel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hotel could not be saved. Please, try again.'));
        }
        $users = $this->Hotels->Users->find('list', ['limit' => 200]);
        $regions = $this->Hotels->Regions->find('list', ['limit' => 200]);
        $typehotels = $this->Hotels->Typehotels->find('list', ['limit' => 200]);
        $this->set(compact('hotel', 'users', 'regions', 'typehotels'));
        $this->set('_serialize', ['hotel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hotel id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hotel = $this->Hotels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hotel = $this->Hotels->patchEntity($hotel, $this->request->getData());
            if ($this->Hotels->save($hotel)) {
                $this->Flash->success(__('The hotel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hotel could not be saved. Please, try again.'));
        }
        $users = $this->Hotels->Users->find('list', ['limit' => 200]);
        $regions = $this->Hotels->Regions->find('list', ['limit' => 200]);
        $typehotels = $this->Hotels->Typehotels->find('list', ['limit' => 200]);
        $this->set(compact('hotel', 'users', 'regions', 'typehotels'));
        $this->set('_serialize', ['hotel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hotel id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hotel = $this->Hotels->get($id);
        if ($this->Hotels->delete($hotel)) {
            $this->Flash->success(__('The hotel has been deleted.'));
        } else {
            $this->Flash->error(__('The hotel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
