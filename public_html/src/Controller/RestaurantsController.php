<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Restaurants Controller
 *
 * @property \App\Model\Table\RestaurantsTable $Restaurants
 *
 * @method \App\Model\Entity\Restaurant[] paginate($object = null, array $settings = [])
 */
class RestaurantsController extends AppController
{
    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'view', 'add']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Regions', 'Raterestaurants', 'Likerestaurants', 'Typerestaurants']
        ];
        $restaurants = $this->paginate($this->Restaurants);

        $this->set(compact('restaurants'));
        $this->set('_serialize', ['restaurants']);
    }

    /**
     * View method
     *
     * @param string|null $id Restaurant id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $restaurant = $this->Restaurants->get($id, [
            'contain' => ['Users', 'Regions', 'Foods', 'Imagerestaurants', 'Raterestaurants', 'Likerestaurants', 'Typerestaurants']
        ]);
		$this->loadModel('Raterestaurants');
        $raterestaurants = $this->Raterestaurants->find()
                ->contain(['Users'])
                ->where(['Raterestaurants.restaurant_id' => $restaurant->id]);
        $count_rate_1 = $this->Raterestaurants->find()
                        ->where(['Raterestaurants.restaurant_id' => $restaurant->id, 'Raterestaurants.status' => 1, 'Raterestaurants.point' => 1])->count();
        $count_rate_2 = $this->Raterestaurants->find()
                        ->where(['Raterestaurants.restaurant_id' => $restaurant->id, 'Raterestaurants.status' => 1, 'Raterestaurants.point' => 2])->count();
        $count_rate_3 = $this->Raterestaurants->find()
                        ->where(['Raterestaurants.restaurant_id' => $restaurant->id, 'Raterestaurants.status' => 1, 'Raterestaurants.point' => 3])->count();
        $count_rate_4 = $this->Raterestaurants->find()
                        ->where(['Raterestaurants.restaurant_id' => $restaurant->id, 'Raterestaurants.status' => 1, 'Raterestaurants.point' => 4])->count();
        $count_rate_5 = $this->Raterestaurants->find()
                        ->where(['Raterestaurants.restaurant_id' => $restaurant->id, 'Raterestaurants.status' => 1, 'Raterestaurants.point' => 5])->count();
        $sum_rate_restaurant = 0;
        foreach ($raterestaurants as $array) {
            $sum_rate_restaurant += $array->point;
        }
        //pr( round($sum__comment_restaurant/$count_comment_restaurant->count(),2));die();
        if ($raterestaurants->count() > 0) {
            $avg = round($sum_rate_restaurant / $raterestaurants->count(), 1);
            $count_rate = $raterestaurants->count();
            $percent_rate_1 = round($count_rate_1 / $count_rate * 100, 0);
            $percent_rate_2 = round($count_rate_2 / $count_rate * 100, 0);
            $percent_rate_3 = round($count_rate_3 / $count_rate * 100, 0);
            $percent_rate_4 = round($count_rate_4 / $count_rate * 100, 0);
            $percent_rate_5 = round($count_rate_5 / $count_rate * 100, 0);
        } else {
            $avg = 0;
            $count_rate = 0;
            $percent_rate_1 = 0;
            $percent_rate_2 = 0;
            $percent_rate_3 = 0;
            $percent_rate_4 = 0;
            $percent_rate_5 = 0;
        }
        $this->set(compact(
                        'restaurant', 'raterestaurants', 
                'avg', 'count_rate', 'count_rate_1', 
                'count_rate_2', 'count_rate_3', 
                'count_rate_4', 'count_rate_5', 
                'percent_rate_1', 'percent_rate_2', 
                'percent_rate_3', 'percent_rate_4', 
                'percent_rate_5'
        ));
        $this->set('_serialize', [
            'restaurant', 'raterestaurants', 'avg',
            'count_rate', 'count_rate_1',
            'count_rate_2', 'count_rate_3',
            'count_rate_4', 'count_rate_5',
            'percent_rate_1', 'percent_rate_2',
            'percent_rate_3', 'percent_rate_4',
            'percent_rate_5'
        ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $restaurant = $this->Restaurants->newEntity();
        if ($this->request->is('post')) {
            $restaurant = $this->Restaurants->patchEntity($restaurant, $this->request->getData());
            if ($this->Restaurants->save($restaurant)) {
                $this->Flash->success(__('The restaurant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The restaurant could not be saved. Please, try again.'));
        }
        $users = $this->Restaurants->Users->find('list', ['limit' => 200]);
        $regions = $this->Restaurants->Regions->find('list', ['limit' => 200]);
        $this->set(compact('restaurant', 'users', 'regions'));
        $this->set('_serialize', ['restaurant']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Restaurant id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $restaurant = $this->Restaurants->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $restaurant = $this->Restaurants->patchEntity($restaurant, $this->request->getData());
            if ($this->Restaurants->save($restaurant)) {
                $this->Flash->success(__('The restaurant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The restaurant could not be saved. Please, try again.'));
        }
        $users = $this->Restaurants->Users->find('list', ['limit' => 200]);
        $regions = $this->Restaurants->Regions->find('list', ['limit' => 200]);
        $this->set(compact('restaurant', 'users', 'regions'));
        $this->set('_serialize', ['restaurant']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Restaurant id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $restaurant = $this->Restaurants->get($id);
        if ($this->Restaurants->delete($restaurant)) {
            $this->Flash->success(__('The restaurant has been deleted.'));
        } else {
            $this->Flash->error(__('The restaurant could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
