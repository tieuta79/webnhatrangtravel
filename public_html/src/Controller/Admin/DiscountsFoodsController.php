<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * DiscountsFoods Controller
 *
 * @property \App\Model\Table\DiscountsFoodsTable $DiscountsFoods
 *
 * @method \App\Model\Entity\DiscountsFood[] paginate($object = null, array $settings = [])
 */
class DiscountsFoodsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Foods', 'Discounts']
        ];
        $discountsFoods = $this->paginate($this->DiscountsFoods);

        $this->set(compact('discountsFoods'));
        $this->set('_serialize', ['discountsFoods']);
    }

    /**
     * View method
     *
     * @param string|null $id Discounts Food id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $discountsFood = $this->DiscountsFoods->get($id, [
            'contain' => ['Foods', 'Discounts']
        ]);

        $this->set('discountsFood', $discountsFood);
        $this->set('_serialize', ['discountsFood']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $discountsFood = $this->DiscountsFoods->newEntity();
        if ($this->request->is('post')) {
            $discountsFood = $this->DiscountsFoods->patchEntity($discountsFood, $this->request->getData());
            if ($this->DiscountsFoods->save($discountsFood)) {
                $this->Flash->success(__('The discounts food has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The discounts food could not be saved. Please, try again.'));
        }
        $foods = $this->DiscountsFoods->Foods->find('list', ['limit' => 200]);
        $discounts = $this->DiscountsFoods->Discounts->find('list', ['limit' => 200]);
        $this->set(compact('discountsFood', 'foods', 'discounts'));
        $this->set('_serialize', ['discountsFood']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Discounts Food id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $discountsFood = $this->DiscountsFoods->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $discountsFood = $this->DiscountsFoods->patchEntity($discountsFood, $this->request->getData());
            if ($this->DiscountsFoods->save($discountsFood)) {
                $this->Flash->success(__('The discounts food has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The discounts food could not be saved. Please, try again.'));
        }
        $foods = $this->DiscountsFoods->Foods->find('list', ['limit' => 200]);
        $discounts = $this->DiscountsFoods->Discounts->find('list', ['limit' => 200]);
        $this->set(compact('discountsFood', 'foods', 'discounts'));
        $this->set('_serialize', ['discountsFood']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Discounts Food id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $discountsFood = $this->DiscountsFoods->get($id);
        if ($this->DiscountsFoods->delete($discountsFood)) {
            $this->Flash->success(__('The discounts food has been deleted.'));
        } else {
            $this->Flash->error(__('The discounts food could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
