<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Rateplaces Controller
 *
 * @property \App\Model\Table\RateplacesTable $Rateplaces
 *
 * @method \App\Model\Entity\Rateplace[] paginate($object = null, array $settings = [])
 */
class RateplacesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Places']
        ];
        $rateplaces = $this->paginate($this->Rateplaces);

        $this->set(compact('rateplaces'));
        $this->set('_serialize', ['rateplaces']);
    }

    /**
     * View method
     *
     * @param string|null $id Rateplace id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rateplace = $this->Rateplaces->get($id, [
            'contain' => ['Users', 'Places']
        ]);

        $this->set('rateplace', $rateplace);
        $this->set('_serialize', ['rateplace']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rateplace = $this->Rateplaces->newEntity();
        if ($this->request->is('post')) {
            $rateplace = $this->Rateplaces->patchEntity($rateplace, $this->request->getData());
            if ($this->Rateplaces->save($rateplace)) {
                $this->Flash->success(__('The rateplace has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rateplace could not be saved. Please, try again.'));
        }
        $users = $this->Rateplaces->Users->find('list', ['limit' => 200]);
        $places = $this->Rateplaces->Places->find('list', ['limit' => 200]);
        $this->set(compact('rateplace', 'users', 'places'));
        $this->set('_serialize', ['rateplace']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Rateplace id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rateplace = $this->Rateplaces->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rateplace = $this->Rateplaces->patchEntity($rateplace, $this->request->getData());
            if ($this->Rateplaces->save($rateplace)) {
                $this->Flash->success(__('The rateplace has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rateplace could not be saved. Please, try again.'));
        }
        $users = $this->Rateplaces->Users->find('list', ['limit' => 200]);
        $places = $this->Rateplaces->Places->find('list', ['limit' => 200]);
        $this->set(compact('rateplace', 'users', 'places'));
        $this->set('_serialize', ['rateplace']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Rateplace id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rateplace = $this->Rateplaces->get($id);
        if ($this->Rateplaces->delete($rateplace)) {
            $this->Flash->success(__('The rateplace has been deleted.'));
        } else {
            $this->Flash->error(__('The rateplace could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
