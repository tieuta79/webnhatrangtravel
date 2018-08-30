<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Typeusers']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Typeusers', 'Comments', 'Events', 'Feedbacks', 'Followers', 'Followings', 'Hotels', 'Restaurants', 'Tours', 'Vehicles']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $typeusers = $this->Users->Typeusers->find('list', ['limit' => 200]);
        $this->set(compact('user', 'typeusers'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $update = false;
        if(empty($id)){
            $update = true;
            $id = $this->Auth->user('id');
        }
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                if($update == false){
                    return $this->redirect(['action' => 'index']);
                }
            }else{
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }            
        }
        $typeusers = $this->Users->Typeusers->find('list', ['limit' => 200]);
        $this->set(compact('user', 'typeusers', 'update'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function login() {
        $this->viewBuilder()->layout('login');
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Sai tài khoản hoặc mật khẩu!'));
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function dashboard() {
        
    }
    public function statistic() {
        $this->loadModel('Users');
        $user = $this->Users->find()
                ->where(['Users.typeuser_id' => 2]);
        $this->set('user', $user->count('*'));
        
        $this->loadModel('Regions');
        $region = $this->Regions->find()
                ->where(['Regions.province_id' => 1]);
        $this->set('region', $region->count('*'));
        
        $this->loadModel('Events');
        $event = $this->Events->find();
        $this->set('event', $event->count('*'));
        
        $this->loadModel('Places');
        $place = $this->Places->find();
        $this->set('place', $place->count('*'));
        
        $this->loadModel('Hotels');
        $hotel = $this->Hotels->find();
        $this->set('hotel', $hotel->count('*'));
        
        $this->loadModel('Restaurants');
        $restaurant = $this->Restaurants->find();
        $this->set('restaurant', $restaurant->count('*'));
        
        $this->loadModel('Vehicles');
        $vehicle = $this->Vehicles->find();
        $this->set('vehicle', $vehicle->count('*'));
        
        $this->loadModel('Tours');
        $tour = $this->Tours->find();
        $this->set('tour', $tour->count('*'));
        
        $this->loadModel('Reviews');
        $review = $this->Reviews->find();
        $this->set('review', $review->count('*'));
        
        $this->loadModel('Plans');
        $plan = $this->Plans->find();
        $this->set('plan', $plan->count('*'));
        
    }
    
    public function changePass() {
        if($this->request->is('post')){
            $hash = new DefaultPasswordHasher;
            $user = $this->Users->get($this->Auth->user('id'));
            
            if($hash->check($this->request->data['old_password'], $user->password)){
                if($this->request->data['password'] == $this->request->data['confirm_password']){                    
                    $user->password = $this->request->data['password'];
                    if($this->Users->save($user)){
                        $this->Flash->success(__('Change password successfull.'));
                    }
                }else{
                    $this->Flash->error(__('Mật khẩu mới và nhập lại mật khẩu không giống nhau.'));
                }
            }else{
                $this->Flash->error(__('Mật khẩu hiện tại không đúng.'));
            }
        }
    }
}
