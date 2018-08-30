<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Rateevents Controller
 *
 * @property \App\Model\Table\RateeventsTable $Rateevents
 *
 * @method \App\Model\Entity\Rateevent[] paginate($object = null, array $settings = [])
 */
class RateeventsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Events']
        ];
        $rateevents = $this->paginate($this->Rateevents);

        $this->set(compact('rateevents'));
        $this->set('_serialize', ['rateevents']);
    }
    public function status() {
        $return = ['status' => false, 'data' => ['status'=>0]];
        if($this->request->is('post')){
            if($this->request->data['status'] == 1){
                $status = 0;
            }else{
                $status = 1;
            }
            
            $review = $this->Rateevents->get($this->request->data['id']);
            $review->status = $status;
            $this->Rateevents->save($review);
            $return['status'] = true;
            $return['data']['status'] = $status;
        }

        $this->set(compact('return'));
        $this->set('_serialize', 'return');
    }

    /**
     * View method
     *
     * @param string|null $id Rateevent id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rateevent = $this->Rateevents->get($id, [
            'contain' => ['Users', 'Events']
        ]);

        $this->set('rateevent', $rateevent);
        $this->set('_serialize', ['rateevent']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rateevent = $this->Rateevents->newEntity();
        if ($this->request->is('post')) {
            $rateevent = $this->Rateevents->patchEntity($rateevent, $this->request->getData());
            if ($this->Rateevents->save($rateevent)) {
                $this->Flash->success(__('The rateevent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rateevent could not be saved. Please, try again.'));
        }
        $users = $this->Rateevents->Users->find('list', ['limit' => 200]);
        $events = $this->Rateevents->Events->find('list', ['limit' => 200]);
        $this->set(compact('rateevent', 'users', 'events'));
        $this->set('_serialize', ['rateevent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Rateevent id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rateevent = $this->Rateevents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rateevent = $this->Rateevents->patchEntity($rateevent, $this->request->getData());
            if ($this->Rateevents->save($rateevent)) {
                $this->Flash->success(__('The rateevent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rateevent could not be saved. Please, try again.'));
        }
        $users = $this->Rateevents->Users->find('list', ['limit' => 200]);
        $events = $this->Rateevents->Events->find('list', ['limit' => 200]);
        $this->set(compact('rateevent', 'users', 'events'));
        $this->set('_serialize', ['rateevent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Rateevent id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rateevent = $this->Rateevents->get($id);
        if ($this->Rateevents->delete($rateevent)) {
            $this->Flash->success(__('The rateevent has been deleted.'));
        } else {
            $this->Flash->error(__('The rateevent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
