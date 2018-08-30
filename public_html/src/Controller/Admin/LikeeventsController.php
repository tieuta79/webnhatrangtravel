<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Likeevents Controller
 *
 * @property \App\Model\Table\LikeeventsTable $Likeevents
 *
 * @method \App\Model\Entity\Likeevent[] paginate($object = null, array $settings = [])
 */
class LikeeventsController extends AppController
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
        $likeevents = $this->paginate($this->Likeevents);

        $this->set(compact('likeevents'));
        $this->set('_serialize', ['likeevents']);
    }

    /**
     * View method
     *
     * @param string|null $id Likeevent id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $likeevent = $this->Likeevents->get($id, [
            'contain' => ['Users', 'Events']
        ]);

        $this->set('likeevent', $likeevent);
        $this->set('_serialize', ['likeevent']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $likeevent = $this->Likeevents->newEntity();
        if ($this->request->is('post')) {
            $likeevent = $this->Likeevents->patchEntity($likeevent, $this->request->getData());
            if ($this->Likeevents->save($likeevent)) {
                $this->Flash->success(__('The likeevent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The likeevent could not be saved. Please, try again.'));
        }
        $users = $this->Likeevents->Users->find('list', ['limit' => 200]);
        $events = $this->Likeevents->Events->find('list', ['limit' => 200]);
        $this->set(compact('likeevent', 'users', 'events'));
        $this->set('_serialize', ['likeevent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Likeevent id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $likeevent = $this->Likeevents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $likeevent = $this->Likeevents->patchEntity($likeevent, $this->request->getData());
            if ($this->Likeevents->save($likeevent)) {
                $this->Flash->success(__('The likeevent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The likeevent could not be saved. Please, try again.'));
        }
        $users = $this->Likeevents->Users->find('list', ['limit' => 200]);
        $events = $this->Likeevents->Events->find('list', ['limit' => 200]);
        $this->set(compact('likeevent', 'users', 'events'));
        $this->set('_serialize', ['likeevent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Likeevent id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $likeevent = $this->Likeevents->get($id);
        if ($this->Likeevents->delete($likeevent)) {
            $this->Flash->success(__('The likeevent has been deleted.'));
        } else {
            $this->Flash->error(__('The likeevent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
