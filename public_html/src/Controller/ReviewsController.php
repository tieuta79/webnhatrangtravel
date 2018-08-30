<?php
namespace App\Controller;

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
	public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'view', 'add', 'edit']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Comments', 'Likereviews']
        ];
        $reviews = $this->paginate($this->Reviews);

        $this->set(compact('reviews'));
        $this->set('_serialize', ['reviews']);
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
            'contain' => ['Users', 'Comments', 'Imagereviews', 'Likereviews']
        ]);
        $this->loadModel('Comments');
        $this->loadModel('Users');
        $comments = $this->Comments->find()->contain(['Users'])->where(['Comments.review_id' => $review->id]);
        $this->set(compact('review', 'comments'));
        $this->set('_serialize', ['review', 'comments']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $res = array();
        $review = $this->Reviews->newEntity();
        if ($this->request->is('post')) {
            $review = $this->Reviews->patchEntity($review, $this->request->getData());
            if ($this->Reviews->save($review)) {
                $res['status'] = 1;
                $res['msg'] = 'Thành công.';
            }
            else {
            $res['status'] = 0;
            $res['msg'] = 'Lỗi.';
        }
            //$this->Flash->error(__('The review could not be saved. Please, try again.'));
        }
        $users = $this->Reviews->Users->find('list', ['limit' => 200]);
        $typereviews = $this->Reviews->Typereviews->find('list', ['limit' => 200]);
        
        $this->set(compact('res', 'users', 'typereviews'));
        $this->set('_serialize', ['res']);
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
        $res = array();
        $review = $this->Reviews->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $review = $this->Reviews->patchEntity($review, $this->request->getData());
            if ($this->Reviews->save($review)) {
                $res['status'] = 1;
                $res['msg'] = 'Thành công.';
            }
            else {
            $res['status'] = 0;
            $res['msg'] = 'Lỗi.';
        }
            //$this->Flash->error(__('The review could not be saved. Please, try again.'));
        }
       $users = $this->Reviews->Users->find('list', ['limit' => 200]);
        $typereviews = $this->Reviews->Typereviews->find('list', ['limit' => 200]);
        
        $this->set(compact('res', 'users', 'typereviews'));
        $this->set('_serialize', ['res']);
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
