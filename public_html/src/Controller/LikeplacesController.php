<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Likeplaces Controller
 *
 * @property \App\Model\Table\LikeplacesTable $Likeplaces
 *
 * @method \App\Model\Entity\Likeplace[] paginate($object = null, array $settings = [])
 */
class LikeplacesController extends AppController
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
        $likeplaces = $this->paginate($this->Likeplaces);

        $this->set(compact('likeplaces'));
        $this->set('_serialize', ['likeplaces']);
    }

    /**
     * View method
     *
     * @param string|null $id Likeplace id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $likeplace = $this->Likeplaces->get($id, [
            'contain' => ['Users', 'Places']
        ]);

        $this->set('likeplace', $likeplace);
        $this->set('_serialize', ['likeplace']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $likeplace = $this->Likeplaces->newEntity();
        if ($this->request->is('post')) {
            $likeplace = $this->Likeplaces->patchEntity($likeplace, $this->request->getData());
            if ($this->Likeplaces->save($likeplace)) {
                $this->Flash->success(__('The likeplace has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The likeplace could not be saved. Please, try again.'));
        }
        $users = $this->Likeplaces->Users->find('list', ['limit' => 200]);
        $places = $this->Likeplaces->Places->find('list', ['limit' => 200]);
        $this->set(compact('likeplace', 'users', 'places'));
        $this->set('_serialize', ['likeplace']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Likeplace id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $likeplace = $this->Likeplaces->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $likeplace = $this->Likeplaces->patchEntity($likeplace, $this->request->getData());
            if ($this->Likeplaces->save($likeplace)) {
                $this->Flash->success(__('The likeplace has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The likeplace could not be saved. Please, try again.'));
        }
        $users = $this->Likeplaces->Users->find('list', ['limit' => 200]);
        $places = $this->Likeplaces->Places->find('list', ['limit' => 200]);
        $this->set(compact('likeplace', 'users', 'places'));
        $this->set('_serialize', ['likeplace']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Likeplace id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $likeplace = $this->Likeplaces->get($id);
        if ($this->Likeplaces->delete($likeplace)) {
            $this->Flash->success(__('The likeplace has been deleted.'));
        } else {
            $this->Flash->error(__('The likeplace could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
