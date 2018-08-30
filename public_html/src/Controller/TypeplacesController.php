<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Typeplaces Controller
 *
 * @property \App\Model\Table\TypeplacesTable $Typeplaces
 *
 * @method \App\Model\Entity\Typeplace[] paginate($object = null, array $settings = [])
 */
class TypeplacesController extends AppController
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
        $typeplaces = $this->paginate($this->Typeplaces);

        $this->set(compact('typeplaces'));
        $this->set('_serialize', ['typeplaces']);
    }

    /**
     * View method
     *
     * @param string|null $id Typeplace id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typeplace = $this->Typeplaces->get($id, [
            'contain' => ['Places']
        ]);

        $this->set('typeplace', $typeplace);
        $this->set('_serialize', ['typeplace']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typeplace = $this->Typeplaces->newEntity();
        if ($this->request->is('post')) {
            $typeplace = $this->Typeplaces->patchEntity($typeplace, $this->request->getData());
            if ($this->Typeplaces->save($typeplace)) {
                $this->Flash->success(__('The typeplace has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typeplace could not be saved. Please, try again.'));
        }
        $this->set(compact('typeplace'));
        $this->set('_serialize', ['typeplace']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Typeplace id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typeplace = $this->Typeplaces->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typeplace = $this->Typeplaces->patchEntity($typeplace, $this->request->getData());
            if ($this->Typeplaces->save($typeplace)) {
                $this->Flash->success(__('The typeplace has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typeplace could not be saved. Please, try again.'));
        }
        $this->set(compact('typeplace'));
        $this->set('_serialize', ['typeplace']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Typeplace id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typeplace = $this->Typeplaces->get($id);
        if ($this->Typeplaces->delete($typeplace)) {
            $this->Flash->success(__('The typeplace has been deleted.'));
        } else {
            $this->Flash->error(__('The typeplace could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
