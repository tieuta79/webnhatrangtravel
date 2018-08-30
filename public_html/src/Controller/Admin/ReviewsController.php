<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Reviews Controller
 *
 * @property \App\Model\Table\ReviewsTable $Reviews
 *
 * @method \App\Model\Entity\Review[] paginate($object = null, array $settings = [])
 */
class ReviewsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Typereviews', 'Comments', 'Likereviews'],
            'order' => ['Reviews.id' => 'desc']
        ];
        $reviews = $this->paginate($this->Reviews);

        $this->set(compact('reviews'));
        $this->set('_serialize', ['reviews']);
    }
    public function status() {
        $return = ['status' => false, 'data' => ['status'=>0]];
        if($this->request->is('post')){
            if($this->request->data['status'] == 1){
                $status = 0;
            }else{
                $status = 1;
            }
            
            $review = $this->Reviews->get($this->request->data['id']);
            $review->status = $status;
            $this->Reviews->save($review);
            $return['status'] = true;
            $return['data']['status'] = $status;
        }

        $this->set(compact('return'));
        $this->set('_serialize', 'return');
    }

    /**
     * View method
     *
     * @param string|null $id Review id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $review = $this->Reviews->get($id, [
            'contain' => ['Users', 'Events', 'Hotels', 'Places', 'Restaurants', 'Tours', 'Vehicles', 'Comments', 'Imagereviews', 'Likereviews']
        ]);

        $this->set('review', $review);
        $this->set('_serialize', ['review']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $review = $this->Reviews->newEntity();
        if ($this->request->is('post')) {
            $review = $this->Reviews->patchEntity($review, $this->request->getData());
            if ($this->Reviews->save($review)) {
                $this->Flash->success(__('The review has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The review could not be saved. Please, try again.'));
        }
        $users = $this->Reviews->Users->find('list', ['limit' => 200]);
        $events = $this->Reviews->Events->find('list', ['limit' => 200]);
        $hotels = $this->Reviews->Hotels->find('list', ['limit' => 200]);
        $places = $this->Reviews->Places->find('list', ['limit' => 200]);
        $restaurants = $this->Reviews->Restaurants->find('list', ['limit' => 200]);
        $tours = $this->Reviews->Tours->find('list', ['limit' => 200]);
        $vehicles = $this->Reviews->Vehicles->find('list', ['limit' => 200]);
        $this->set(compact('review', 'users', 'events', 'hotels', 'places', 'restaurants', 'tours', 'vehicles'));
        $this->set('_serialize', ['review']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Review id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $review = $this->Reviews->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $review = $this->Reviews->patchEntity($review, $this->request->getData());
            if ($this->Reviews->save($review)) {
                $this->Flash->success(__('The review has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The review could not be saved. Please, try again.'));
        }
        $users = $this->Reviews->Users->find('list', ['limit' => 200]);
        $events = $this->Reviews->Events->find('list', ['limit' => 200]);
        $hotels = $this->Reviews->Hotels->find('list', ['limit' => 200]);
        $places = $this->Reviews->Places->find('list', ['limit' => 200]);
        $restaurants = $this->Reviews->Restaurants->find('list', ['limit' => 200]);
        $tours = $this->Reviews->Tours->find('list', ['limit' => 200]);
        $vehicles = $this->Reviews->Vehicles->find('list', ['limit' => 200]);
        $this->set(compact('review', 'users', 'events', 'hotels', 'places', 'restaurants', 'tours', 'vehicles'));
        $this->set('_serialize', ['review']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Review id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $review = $this->Reviews->get($id);
        if ($this->Reviews->delete($review)) {
            $this->Flash->success(__('The review has been deleted.'));
        } else {
            $this->Flash->error(__('The review could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
