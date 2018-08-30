<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Typerooms Controller
 *
 * @property \App\Model\Table\TyperoomsTable $Typerooms
 *
 * @method \App\Model\Entity\Typeroom[] paginate($object = null, array $settings = [])
 */
class TyperoomsController extends AppController
{
	public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'view']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $typerooms = $this->paginate($this->Typerooms);

        $this->set(compact('typerooms'));
        $this->set('_serialize', ['typerooms']);
    }

    /**
     * View method
     *
     * @param string|null $id Typeroom id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typeroom = $this->Typerooms->get($id, [
            'contain' => ['Rooms']
        ]);

        $this->set('typeroom', $typeroom);
        $this->set('_serialize', ['typeroom']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typeroom = $this->Typerooms->newEntity();
        if ($this->request->is('post')) {
            $typeroom = $this->Typerooms->patchEntity($typeroom, $this->request->getData());
            if ($this->Typerooms->save($typeroom)) {
                $this->Flash->success(__('The typeroom has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typeroom could not be saved. Please, try again.'));
        }
        $this->set(compact('typeroom'));
        $this->set('_serialize', ['typeroom']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Typeroom id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typeroom = $this->Typerooms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typeroom = $this->Typerooms->patchEntity($typeroom, $this->request->getData());
            if ($this->Typerooms->save($typeroom)) {
                $this->Flash->success(__('The typeroom has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typeroom could not be saved. Please, try again.'));
        }
        $this->set(compact('typeroom'));
        $this->set('_serialize', ['typeroom']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Typeroom id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typeroom = $this->Typerooms->get($id);
        if ($this->Typerooms->delete($typeroom)) {
            $this->Flash->success(__('The typeroom has been deleted.'));
        } else {
            $this->Flash->error(__('The typeroom could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
