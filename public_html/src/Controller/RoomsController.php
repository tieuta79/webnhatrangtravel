<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Rooms Controller
 *
 * @property \App\Model\Table\RoomsTable $Rooms
 *
 * @method \App\Model\Entity\Room[] paginate($object = null, array $settings = [])
 */
class RoomsController extends AppController
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
            'contain' => ['Hotels', 'Typerooms']
        ];
        $rooms = $this->paginate($this->Rooms);

        $this->set(compact('rooms'));
        $this->set('_serialize', ['rooms']);
    }

    /**
     * View method
     *
     * @param string|null $id Room id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $room = $this->Rooms->get($id, [
            'contain' => ['Hotels', 'Typerooms']
        ]);

        $this->set('room', $room);
        $this->set('_serialize', ['room']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $res = array();
        $room = $this->Rooms->newEntity();
        if ($this->request->is('post')) {
            $room = $this->Rooms->patchEntity($room, $this->request->getData());
            if ($this->Rooms->save($room)) {
                $res['status'] = 1;
                $res['msg'] = 'Thành công.';
            }
            else {
            $res['status'] = 0;
            $res['msg'] = 'Lỗi.';
            }
            //$this->Flash->error(__('The room could not be saved. Please, try again.'));
        }
        $hotels = $this->Rooms->Hotels->find('list', ['limit' => 200]);
        $typerooms = $this->Rooms->Typerooms->find('list', ['limit' => 200]);
        $this->set(compact('res', 'hotels', 'typerooms'));
        $this->set('_serialize', ['res']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Room id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res = array();
        $room = $this->Rooms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $room = $this->Rooms->patchEntity($room, $this->request->getData());
            if ($this->Rooms->save($room)) {
                 $res['status'] = 1;
                 $res['msg'] = 'Thành công.';
            }
            else {
            $res['status'] = 0;
            $res['msg'] = 'Lỗi.';
            }
            //$this->Flash->error(__('The room could not be saved. Please, try again.'));
        }
        $hotels = $this->Rooms->Hotels->find('list', ['limit' => 200]);
        $typerooms = $this->Rooms->Typerooms->find('list', ['limit' => 200]);
        $this->set(compact('res', 'hotels', 'typerooms'));
        $this->set('_serialize', ['res']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Room id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res = array();
        $this->request->allowMethod(['post', 'delete']);
        $room = $this->Rooms->get($id);
        if ($this->Rooms->delete($room)) {
            $res['status'] = 1;
                $res['msg'] = 'Thành công.';
        } else {
            $res['status'] = 0;
            $res['msg'] = 'Lỗi.';
        }

        $this->set(compact('res'));
        $this->set('_serialize', ['res']);
    }
}
