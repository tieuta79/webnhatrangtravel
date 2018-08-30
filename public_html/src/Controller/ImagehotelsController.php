<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Imagehotels Controller
 *
 * @property \App\Model\Table\ImagehotelsTable $Imagehotels
 *
 * @method \App\Model\Entity\Imagehotel[] paginate($object = null, array $settings = [])
 */
class ImagehotelsController extends AppController
{
     public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'view', 'edit', 'add', 'delete']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Hotels']
        ];
        $imagehotels = $this->paginate($this->Imagehotels);

        $this->set(compact('imagehotels'));
        $this->set('_serialize', ['imagehotels']);
    }

    /**
     * View method
     *
     * @param string|null $id Imagehotel id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imagehotel = $this->Imagehotels->get($id, [
            'contain' => ['Hotels']
        ]);

        $this->set('imagehotel', $imagehotel);
        $this->set('_serialize', ['imagehotel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $res = array();
        $imagehotel = $this->Imagehotels->newEntity();
        if ($this->request->is('post')) {
            $imagehotel = $this->Imagehotels->patchEntity($imagehotel, $this->request->getData());
            if ($this->Imagehotels->save($imagehotel)) {
                $res['status'] = 1;
                $res['msg'] = 'Thành công.';
            }
            else {
                $res['status'] = 0;
                $res['msg'] = 'Lỗi.';
            }
            //$this->Flash->error(__('The imagehotel could not be saved. Please, try again.'));
        }
        $hotels = $this->Imagehotels->Hotels->find('list', ['limit' => 200]);
        $this->set(compact('res', 'hotels'));
        $this->set('_serialize', ['res']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Imagehotel id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res = array();
        $imagehotel = $this->Imagehotels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagehotel = $this->Imagehotels->patchEntity($imagehotel, $this->request->getData());
            if ($this->Imagehotels->save($imagehotel)) {
                $res['status'] = 1;
                $res['msg'] = 'Thành công.';
            }
            else {
                $res['status'] = 0;
                $res['msg'] = 'Lỗi.';
            }
            //$this->Flash->error(__('The imagehotel could not be saved. Please, try again.'));
        }
        $hotels = $this->Imagehotels->Hotels->find('list', ['limit' => 200]);
        $this->set(compact('res', 'hotels'));
        $this->set('_serialize', ['res']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Imagehotel id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res = array();
        $this->request->allowMethod(['post', 'delete']);
        $imagehotel = $this->Imagehotels->get($id);
        if ($this->Imagehotels->delete($imagehotel)) {
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
