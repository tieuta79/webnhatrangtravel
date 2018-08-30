<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Details Controller
 *
 * @property \App\Model\Table\DetailsTable $Details
 *
 * @method \App\Model\Entity\Detail[] paginate($object = null, array $settings = [])
 */
class DetailsController extends AppController
{

	public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'view', 'add', 'edit', 'delete']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Plans', 'Places']
        ];
        $details = $this->paginate($this->Details);
        $this->set(compact('details'));
        $this->set('_serialize', ['details']);
    }

    /**
     * View method
     *
     * @param string|null $id Detail id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $detail = $this->Details->get($id, [
            'contain' => ['Plans', 'Places']
        ]);

        $this->set('detail', $detail);
        $this->set('_serialize', ['detail']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $res = array();
        $detail = $this->Details->newEntity();
        if ($this->request->is('post')) {
            $detail = $this->Details->patchEntity($detail, $this->request->getData());
            if ($this->Details->save($detail)) {
                $res['status'] = 1;
                $res['msg'] = 'Thành công.';
            }
            else {
            $res['status'] = 0;
            $res['msg'] = 'Lỗi.';
        }
            //$this->Flash->error(__('The detail could not be saved. Please, try again.'));
        }
        $plans = $this->Details->Plans->find('list', ['limit' => 200]);
        $places = $this->Details->Places->find('list', ['limit' => 200]);
        $this->set(compact('res', 'plans', 'places'));
        $this->set('_serialize', ['res']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Detail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $detail = $this->Details->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $detail = $this->Details->patchEntity($detail, $this->request->getData());
            if ($this->Details->save($detail)) {
                $this->Flash->success(__('The detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detail could not be saved. Please, try again.'));
        }
        $plans = $this->Details->Plans->find('list', ['limit' => 200]);
        $places = $this->Details->Places->find('list', ['limit' => 200]);
        $this->set(compact('detail', 'plans', 'places'));
        $this->set('_serialize', ['detail']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Detail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $detail = $this->Details->get($id);
        if ($this->Details->delete($detail)) {
            $this->Flash->success(__('The detail has been deleted.'));
        } else {
            $this->Flash->error(__('The detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
