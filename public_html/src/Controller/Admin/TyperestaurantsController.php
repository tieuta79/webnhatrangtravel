<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Typerestaurants Controller
 *
 * @property \App\Model\Table\TyperestaurantsTable $Typerestaurants
 *
 * @method \App\Model\Entity\Typerestaurant[] paginate($object = null, array $settings = [])
 */
class TyperestaurantsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $typerestaurants = $this->paginate($this->Typerestaurants);

        $this->set(compact('typerestaurants'));
        $this->set('_serialize', ['typerestaurants']);
    }

    /**
     * View method
     *
     * @param string|null $id Typerestaurant id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typerestaurant = $this->Typerestaurants->get($id, [
            'contain' => ['Restaurants']
        ]);

        $this->set('typerestaurant', $typerestaurant);
        $this->set('_serialize', ['typerestaurant']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typerestaurant = $this->Typerestaurants->newEntity();
        if ($this->request->is('post')) {
            $typerestaurant = $this->Typerestaurants->patchEntity($typerestaurant, $this->request->getData());
            if ($this->Typerestaurants->save($typerestaurant)) {
                $this->Flash->success(__('The typerestaurant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typerestaurant could not be saved. Please, try again.'));
        }
        $this->set(compact('typerestaurant'));
        $this->set('_serialize', ['typerestaurant']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Typerestaurant id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typerestaurant = $this->Typerestaurants->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typerestaurant = $this->Typerestaurants->patchEntity($typerestaurant, $this->request->getData());
            if ($this->Typerestaurants->save($typerestaurant)) {
                $this->Flash->success(__('The typerestaurant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typerestaurant could not be saved. Please, try again.'));
        }
        $this->set(compact('typerestaurant'));
        $this->set('_serialize', ['typerestaurant']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Typerestaurant id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typerestaurant = $this->Typerestaurants->get($id);
        if ($this->Typerestaurants->delete($typerestaurant)) {
            $this->Flash->success(__('The typerestaurant has been deleted.'));
        } else {
            $this->Flash->error(__('The typerestaurant could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
