<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ratehotels Controller
 *
 * @property \App\Model\Table\RatehotelsTable $Ratehotels
 *
 * @method \App\Model\Entity\Ratehotel[] paginate($object = null, array $settings = [])
 */
class RatehotelsController extends AppController
{
	public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'view', 'add','edit']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Hotels']
        ];
        $ratehotels = $this->paginate($this->Ratehotels);

        $this->set(compact('ratehotels'));
        $this->set('_serialize', ['ratehotels']);
    }

    /**
     * View method
     *
     * @param string|null $id Ratehotel id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ratehotel = $this->Ratehotels->get($id, [
            'contain' => ['Users', 'Hotels']
        ]);

        $this->set('ratehotel', $ratehotel);
        $this->set('_serialize', ['ratehotel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$res = array();
        $ratehotel = $this->Ratehotels->newEntity();
        if ($this->request->is('post')) {
            $ratehotel = $this->Ratehotels->patchEntity($ratehotel, $this->request->getData());
            if ($this->Ratehotels->save($ratehotel)) {
                $res['status'] = 1;
                $res['msg'] = 'Thành công.';

            }
            else {
                $res['status'] = 0;
                $res['msg'] = 'Lỗi.';
            }
        }
        $users = $this->Ratehotels->Users->find('list', ['limit' => 200]);
        $hotels = $this->Ratehotels->Hotels->find('list', ['limit' => 200]);
        $this->set(compact('res', 'users', 'hotels'));
        $this->set('_serialize', ['res']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ratehotel id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ratehotel = $this->Ratehotels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ratehotel = $this->Ratehotels->patchEntity($ratehotel, $this->request->getData());
            if ($this->Ratehotels->save($ratehotel)) {
                $this->Flash->success(__('The ratehotel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ratehotel could not be saved. Please, try again.'));
        }
        $users = $this->Ratehotels->Users->find('list', ['limit' => 200]);
        $hotels = $this->Ratehotels->Hotels->find('list', ['limit' => 200]);
        $this->set(compact('ratehotel', 'users', 'hotels'));
        $this->set('_serialize', ['ratehotel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ratehotel id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
		$res = array();
        $this->request->allowMethod(['post', 'delete']);
        $ratehotel = $this->Ratehotels->get($id);
        if ($this->Ratehotels->delete($ratehotel)) {
            $res['status'] = 1;
			$res['msg'] = 'Thành công.';

        } else {
            $res['status'] = 0;
			$res['msg'] = 'Lỗi.';
        }
		$this->set(compact('res'));
        $this->set('_serialize', ['res']);
        //return $this->redirect(['action' => 'index']);
    }
}
