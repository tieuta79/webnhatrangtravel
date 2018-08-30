<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends AppController {

    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['register', 'logout', 'login', 'add', 'index', 'view']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Typeusers', 'Reviews']
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
    public function view($id = null) {
        //$user = $this->Users->get($id, [
        //    'contain' => ['Typeusers', 'Blackusers', 'Comments', 'Events', 'Feedbacks', 'Followers', 'Followings', 'Hotels', 'Restaurants', 'Tours', 'Vehicles', 'Whishlists']
        //]);
        $user = $this->Users->get($id, [
            'contain' => ['Typeusers', 'Reviews', 'Followings', 'Followings_user', 'Plans', 'Hotels', 'Restaurants', 'Places', 'Likehotels', 'Likerestaurants', 'Likeevents', 'Likeplaces', 'Likevehicles', 'Liketours']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $res = array();
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $res['status'] = 1;
                $res['msg'] = 'Thành công.';
            } else {
                $res['status'] = 0;
                $res['msg'] = 'Lỗi.';
            }
            //$this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $typeusers = $this->Users->Typeusers->find('list', ['limit' => 200]);
        $this->set(compact('res', 'typeusers'));
        $this->set('_serialize', ['res']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
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
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
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
        $res = array();
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                //return $this->redirect($this->Auth->redirectUrl());
                $res['status'] = 'Đăng nhập thành công.';
                $res['user_id_save'] = $this->Auth->user('id');
                $res['user_name_save'] = $this->Auth->user('username');
                $res['user_image_save'] = $this->Auth->user('image');
                $res['typeuser_slug_save'] = $this->Auth->user('typeuser.slug');
            } else {
                $res['status'] = 'Sai email hoặc mật khẩu.';
                //$this->Flash->error(__('Invalid username or password, try again'));
            }
        }
        $this->set(compact('res'));
        $this->set('_serialize', ['res']);
    }

    public function register() {
        $res = array();
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $res['status'] = 1;
                $res['msg'] = 'Thành công.';
            } else {
                $res['status'] = 0;
                $res['msg'] = 'Lỗi.';
            }
            //$this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $roles = $this->Users->Typeusers->find('list', ['limit' => 200]);
        $this->set(compact('res', 'roles'));
        $this->set('_serialize', ['res']);
    }

    public function logout() {
        //return $this->redirect($this->Auth->logout());
        $this->Auth->logout();
        $res = array();
        $res['status'] = 'Đăng xuất thành công.';
        $this->set(compact('res'));
        $this->set('_serialize', ['res']);
    }

    public function myaccount() {
        
    }

    public function changePass() {
        $res = array();
        if ($this->request->is('post')) {
            $hash = new DefaultPasswordHasher;
            $user = $this->Users->get($this->Auth->user('id'));

            if ($hash->check($this->request->data['old_password'], $user->password)) {
                if ($this->request->data['password'] == $this->request->data['confirm_password']) {
                    $user->password = $this->request->data['password'];
                    if ($this->Users->save($user)) {
                        $res['status'] = 1;
                        $res['msg'] = 'Thành công.';
                    }
                } else {
                    $res['status'] = 0;
                    $res['msg'] = 'Lỗi.';
                }
            } else {
                $res['status'] = 0;
                $res['msg'] = 'Lỗi.';
            }
        }
        $this->set(compact('res'));
        $this->set('_serialize', ['res']);
    }

    public function editInfoAccount($id = null) {
        $update = false;
        if (empty($id)) {
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
                if ($update == false) {
                    return $this->redirect(['action' => 'index']);
                }
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles', 'update'));
        $this->set('_serialize', ['user']);
    }

    public function infoaccount() {
        $this->loadModel('Users');
        $user = $this->Users->find()
                        ->where(['Users.id' => $this->request->session()->read('Auth.User.id')])->first();
        $this->set('user', $user);
    }

    public function comment() {
        $this->loadModel('Comments');
        $comments = $this->Comments->find()
                ->contain(['Users'])
                ->where(['Comments.status' => 1, 'Comments.user_id' => $this->request->session()->read('Auth.User.id')])
                ->orderDesc('Comments.id');
        $this->set('comments', $comments);
    }

}
