<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Feedbacks Controller
 *
 * @property \App\Model\Table\FeedbacksTable $Feedbacks
 *
 * @method \App\Model\Entity\Feedback[] paginate($object = null, array $settings = [])
 */
class FeedbacksController extends AppController
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
            'contain' => ['Users']
        ];
        $feedbacks = $this->paginate($this->Feedbacks);

        $this->set(compact('feedbacks'));
        $this->set('_serialize', ['feedbacks']);
    }

    /**
     * View method
     *
     * @param string|null $id Feedback id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $feedback = $this->Feedbacks->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('feedback', $feedback);
        $this->set('_serialize', ['feedback']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $res = array();
        $feedback = $this->Feedbacks->newEntity();
        if ($this->request->is('post')) {
            $feedback = $this->Feedbacks->patchEntity($feedback, $this->request->getData());
            if ($this->Feedbacks->save($feedback)) {
                $res['status'] = 1;
                $res['msg'] = 'Thành công.';
            }
            else {
                $res['status'] = 0;
                $res['msg'] = 'Lỗi.';
            }
            //$this->Flash->error(__('The feedback could not be saved. Please, try again.'));
        }
        $users = $this->Feedbacks->Users->find('list', ['limit' => 200]);
        $this->set(compact('res', 'users'));
        $this->set('_serialize', ['res']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Feedback id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $feedback = $this->Feedbacks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $feedback = $this->Feedbacks->patchEntity($feedback, $this->request->getData());
            if ($this->Feedbacks->save($feedback)) {
                $this->Flash->success(__('The feedback has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The feedback could not be saved. Please, try again.'));
        }
        $users = $this->Feedbacks->Users->find('list', ['limit' => 200]);
        $this->set(compact('feedback', 'users'));
        $this->set('_serialize', ['feedback']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Feedback id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $feedback = $this->Feedbacks->get($id);
        if ($this->Feedbacks->delete($feedback)) {
            $this->Flash->success(__('The feedback has been deleted.'));
        } else {
            $this->Flash->error(__('The feedback could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
