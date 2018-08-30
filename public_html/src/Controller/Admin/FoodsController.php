<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Foods Controller
 *
 * @property \App\Model\Table\FoodsTable $Foods
 *
 * @method \App\Model\Entity\Food[] paginate($object = null, array $settings = [])
 */
class FoodsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Restaurants', 'Typefoods']
        ];
        $foods = $this->paginate($this->Foods);

        $this->set(compact('foods'));
        $this->set('_serialize', ['foods']);
    }

    /**
     * View method
     *
     * @param string|null $id Food id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $food = $this->Foods->get($id, [
            'contain' => ['Restaurants', 'Typefoods', 'Discounts', 'Comments', 'Whishlists']
        ]);

        $this->set('food', $food);
        $this->set('_serialize', ['food']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $food = $this->Foods->newEntity();
        if ($this->request->is('post')) {
            $food = $this->Foods->patchEntity($food, $this->request->getData());
            if ($this->Foods->save($food)) {
                $this->Flash->success(__('The food has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The food could not be saved. Please, try again.'));
        }
        $restaurants = $this->Foods->Restaurants->find('list', ['limit' => 200]);
        $typefoods = $this->Foods->Typefoods->find('list', ['limit' => 200]);
        $discounts = $this->Foods->Discounts->find('list', ['limit' => 200]);
        $this->set(compact('food', 'restaurants', 'typefoods', 'discounts'));
        $this->set('_serialize', ['food']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Food id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $food = $this->Foods->get($id, [
            'contain' => ['Discounts']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $food = $this->Foods->patchEntity($food, $this->request->getData());
            if ($this->Foods->save($food)) {
                $this->Flash->success(__('The food has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The food could not be saved. Please, try again.'));
        }
        $restaurants = $this->Foods->Restaurants->find('list', ['limit' => 200]);
        $typefoods = $this->Foods->Typefoods->find('list', ['limit' => 200]);
        $discounts = $this->Foods->Discounts->find('list', ['limit' => 200]);
        $this->set(compact('food', 'restaurants', 'typefoods', 'discounts'));
        $this->set('_serialize', ['food']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Food id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $food = $this->Foods->get($id);
        if ($this->Foods->delete($food)) {
            $this->Flash->success(__('The food has been deleted.'));
        } else {
            $this->Flash->error(__('The food could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
